<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Material_UploadController extends Controller
{

    public function store(Request $request){
        $filename=$request->file('material-link')->getClientOriginalName();
        
        $request->file('material-link')->storeAs('public/material', $filename);
   }
}
