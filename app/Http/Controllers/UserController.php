<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\ImageServiceProvider;
use Image;
use App\User;
use DB;

class UserController extends Controller
{
  public function getInscriptionClient()
  {
    return view('front/inscription_client');
  }

  public function postInscriptionClient(Request $request)
  {
    $validatedData = $request->validate([

    'nom' => 'required|string|max:255',
    'prenom' => 'required|string|max:255',
    'email' => 'required|string|max:255',
    'telephone' => 'required|string|max:255',
    'password' => 'required|min:6|confirmed',
        ]);

        $request['type_id'] = 2 ;

        User::create($request->all());

        return back()->with('status', 'Votre inscription a bien été enregistrée avec succès');

  }

  public function getLoginClient()
  {
    return view('front/login_client');
  }

  public function postLoginClient(Request $request)
  {
    if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
           return redirect('/profil_client');
       }else{

           return back();
       }
  }
public function getLogout()
{
         	Auth::logout();
         	return redirect('/');
 }
 public function getProfilUser(Request $request)
 {

   return view('front/profil_client');
 }
 public function postModifierProfil(Request $request)
{

   $file = $request->file();
 $request->validate(['file' => 'image|mimes:jpg,png|min:20000']);
   foreach ($file as  $value) {

       $name= $value->getClientOriginalName();

       Image::make($value)->save('front/avatar/'.$name);
       DB::table('users')
                ->where('id', Auth()->User()->id)
                ->update(['avatar' => $name]);
   }

   DB::table('users')
            ->where('id', Auth()->User()->id)
            ->update(['nom' => $request['nom'],
              'prenom' => $request['prenom'],
              'email' => $request['email'],
              'adresse' => $request['adresse'],
              'telephone' => $request['telephone'],
            ]);

  return back()->with('status', 'Update succès');

 }

}
