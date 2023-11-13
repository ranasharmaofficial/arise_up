<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index(Request $request){
        return view('admin/vendor.index');
    }

    public function create(){
        return view('admin/vendor.create');
    }


}
