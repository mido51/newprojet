<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator ;
use App\User;
use App\Propertie;
use App\Photo;
use App\Categorie;
use App\Transaction;
use App\location;
use Image;

class PropertieController extends Controller
{
  public function getAjouterBien(){
      $locations = Location::All();
      $categories = Categorie::All(); //select * from table categories
      $transactions = Transaction::All();
     return view('front/ajout_bien')->with([
      'transactions'=>$transactions ,
      'categories'=>$categories ,
      'locations'=>$locations,
    ]);

   }

   public function postAjouterBien(Request $request)
   {
     $file = $request->file();
     foreach($file as $cle => $element)
                        {
     $validatedData = $request->validate([

     'nom' => 'string|max:255',
     'prenom' => 'string|max:255',
     'email' => 'string|max:255',
     'telephone' => 'required|string|max:255',
     'categorie_id'=> 'required',
     'transaction_id'=>'required',
     'titre_bien'=> 'required|string|max:255',
     'prix'=> 'required|string|max:255',
     'surface'=> 'required|string|max:255',
     'nombre_piece'=>'required',
     'nombre_bain'=>'required',
     $cle =>'image|mimes:jpg,png|max:2048',
     'garages'=>'required',
     'address_bien'=>'required',
     'description'=> 'required|string',
         ]);
       }

    $name =  time().$request->file('additional_img1')->getClientOriginalName();
     $request['user_id'] = Auth()->User()->id;
      $request['image'] = $name;
      Image::make($request->file('additional_img1'))->resize(800,450)->save('front/image_projet/'.$name);

     $id_bien = Propertie::create($request->all());


     $file = $request->file();

     foreach ($file as  $value) {
         $name= time().$value->getClientOriginalName();
         Image::make($value)->resize(800,450)->save('front/image_projet/'.$name);
         Photo::create(['nom_image' =>$name,'propertie_id'=>$id_bien->id]);
     }

     return back()->with('status','Votre bien a été ajouter avec succ');
     }


     public function getListProperties()
     {
       $properties = Propertie::All();
      return view('front/liste_properties')->with('properties',$properties);
     }

     public function getPropertiesClient()
     {
       $properties =  Propertie::where('user_id',Auth()->User()->id)->paginate(5);

       return view('front/properties_client')->withProperties($properties);
     }

     public function getDetailstPropertie($id)
     {
       $propertie = Propertie::find($id);
       return view('front/detail_propertie')->with('propertie',$propertie);
     }
     public function getDeletetPropertie($id)
     {
       Propertie::destroy($id);
       return back()->with('status','votre propertie est supprimer');
     }

}
