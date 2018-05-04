<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Propertie;
use App\Categorie;
use App\Transaction;
use App\Location;

class TempleteController extends Controller
{
  public function index(){

    $properties =  Propertie::paginate(6);
    $transactions = Transaction::all();
    $locations = Location::all();
    $categories = Categorie::all();
    $lastproperties = Propertie::latest()->limit(3)->get();


     return view('front/newindex')->with([
       'properties'=>$properties,
       'lastproperties'=>$lastproperties,
       'transactions'=>$transactions,
       'categories'=>$categories,
       'locations'=>$locations,
     ]);

   }
}
