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

class AjaxController extends Controller
{

  public function indexSimpleSearch()
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


    public function indexAdvancedSearch(Request $request)
    {
        $pre=Propertie::where([['location_id','=',$request->location],['transaction_id','=',$request->transaction],['categorie_id','=',$request->categorie]])->whereBetween('prix',[$request->prixmin, $request->prixmax])->get();

        return response()->json($pre);


    }
}
