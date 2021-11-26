<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/');
    }
	
	public function home()
    {
        return view('/home');
    }
	
	public function contents()
    {
        return view('contents');
    }

	public function restore()
    {
        return view('restore');
    }

	public function meta()
    {
        return view('meta');
    }
    
    public function others()
    {
        return view('others');
    }
}
