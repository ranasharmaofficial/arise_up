<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(Request $request){
        return view('admin/unit.index');
    }

    public function create(){
        return view('admin/unit.create');
    }


}
