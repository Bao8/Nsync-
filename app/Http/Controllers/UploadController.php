<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request){
        $filename=request()->file('image')->getClientOriginalName();
        $inputs['image']=request('image')->storeAs('public/thumb', $filename);
   }
}
