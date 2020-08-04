<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Input;
use App\Beer;

class SearchController extends Controller
{
    public function index (Request $request) { 
        // $query = Input::get ( 'q' );
        // $item = $request->input('q')->get();
        // $item->product_name = $request->input('q');
        // $item = Beer::findOrFail($q);
        // $request = Request::get ( 'q' );
        $request = request('q');
        // return $request;
        // dd($request);

        if($request != ""){
            $beer = Beer::where ( 'product_name', 'LIKE', '%' . $request . '%' )->orWhere ( 'company_name', 'LIKE', '%' . $request . '%' )->get ();
            if (count ( $beer ) > 0)
                return view ( 'welcome' )->withDetails ( $beer )->withQuery ( $request );
            else
                return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
        } else {
            return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
        }
        return view ( 'search-functionality-in-laravel/welcome' )->withMessage ( 'No Details found. Try to search again !' );
    }
}
