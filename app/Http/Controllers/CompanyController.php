<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
  public function index(){
    $companies = Company::all();
  return view('index',[
    'companies'=>$companies,
  ]);
  }

  public function detail($id){
    $detail = DB::table('companies')->where('id',$id)->first();
    return view('detail',['detail'=>$detail]);
  }
}
