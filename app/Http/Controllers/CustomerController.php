<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request){
        return view('admin/customer.index');
    }

    public function create(){
        return view('admin/customer.create');
    }


}
