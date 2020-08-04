<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index(){
        
        
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }


    public function show($company_id){

        $company = Company::findOrFail($company_id);


        return view('companies.show', compact('company'));
    }
}
