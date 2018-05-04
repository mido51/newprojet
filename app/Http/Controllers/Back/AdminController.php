<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Propertie;
use App\Categorie;
use App\Transaction;
use App\Location;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

public function getLoginAdmin()
 {
    return view('back/login_admin');
  }

public function adminIndex()
  {
  return view('back/index');
}

public function postLoginAdmin(Request $request)
  {
    if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
           return redirect('admin/index');
       }else{
           return back();
       }

  }

public function adminProperties()
  {
      $properties = Propertie::All();
        return view('back/admin_properties')->with('properties',$properties);
    }

public function getDeleteAdmintPropertie($id)
  {
    Propertie::destroy($id);
    return back()->with('status','La supression a ete effectue');
    }

public function getDetailstAdminProperties($id)
  {
      $propertie = Propertie::find($id);
      return view('front/detail_propertie')->with('propertie',$propertie);
    }

public function adminUsers()
  {
      $users = User::where('type_id',2)->get();
      return view('back/admin_users')->with('users',$users);
    }

public function getDeleteAdminUser($id)
  {
    User::destroy($id);
    return back()->with('status','La supression de User a ete effectue');
    }

public function adminOptions()
  { $categories = Categorie::All();
      $transactions = Transaction::All();
      $locations = Location::All();
        return view('back/admin_options')->with([
          'categories'=>$categories,
          'transactions'=>$transactions,
          'locations'=>$locations
      ]);
    }

public function adminDeleteCategorie($id)
  {
      Categorie::destroy($id);
      return back()->with('status','Vous avez supprimer une categorie');
    }

public function adminDeleteTransaction($id)
  {
      Transaction::destroy($id);
      return back()->with('sta','Vous avez supprimer une transaction');
    }

public function adminDeleteLocation($id)
  {
    Location::destroy($id);
    return back()->with('statu','Vous avez supprimer une location');
        }



}
