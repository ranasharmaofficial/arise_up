<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request){
        return view('admin/item.index');
    }

    public function create(){
        return view('admin/item.create');
    }


}
