<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use  App\Company;
class CompanyController extends Controller
{
    function show(){
        return  DB::table('companies')
                    ->join('employees', 'employees.id', '=', 'companies.id_employee')
                    ->select('companies.*', 'employees.name as employee')
                    ->get();



      /*  $companies = DB::table('companies')->get();
        $i = 0;
                   foreach($companies as $company){
                        $companies[$i]->employee= DB::table('employees')->whereId($company->id_employee)->get();
                        $i++;               
                    }
                    return $companies; */
    } 

    public function addCompany(Request $request) {
        $company = Company::create($request->all());
        return response($company, 201);
    }

}
