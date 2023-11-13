<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        return view('admin/category.index');
    }

    public function create(){
        return view('admin/category.create');
    }


}
