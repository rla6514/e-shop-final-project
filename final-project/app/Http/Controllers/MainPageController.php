<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
use App\Company;


class MainPageController extends Controller
{
    public function slider()
    {
        $beers = Beer::all();
        $beers = Company::all();
        

        return view('welcome', compact('beers'));
    }
    
}
