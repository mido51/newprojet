<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Propertie;
use App\Categorie;
use App\Transaction;
use App\Location;
use Illuminate\Support\Facades\Input;
class Test extends Controller
{
    public function test()
    {
      $properties =  Propertie::paginate(6);
      $transactions = Transaction::all();
      $locations = Location::all();
      $categories = Categorie::all();
      $lastproperties = Propertie::latest()->limit(3)->get();


       return view('front/test_search')->with([
         'properties'=>$properties,
         'lastproperties'=>$lastproperties,
         'transactions'=>$transactions,
         'categories'=>$categories,
         'locations'=>$locations,
       ]);
    }


    public function test1()
    	{
        $a = Input::get('search');
        switch ($a) {
          case 'date_asc':
            $properties = Propertie::orderByRaw('created_at asc')->get();
          break;
          case 'date_desc':
              $properties = Propertie::orderByRaw('created_at desc')->get();
          break;
          case 'price_desc':
              $properties = Propertie::orderByRaw('prix desc')->get();
          break;
          default:
        $properties = Propertie::orderByRaw('prix asc')->get();
            break;
        }

return  response()->json($properties);
    	}

      public function search(Request $request)
      {
        $properties=Propertie::where([['location_id','=',$request->Location],['transaction_id','=',$request->Status],
           ['categorie_id','=',$request->Type]])
            ->whereBetween('prix',[$request->prixmin, $request->prixmax])
            ->get();

            return view('front/search')->with()
      }



}
