<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function about()
    {
        return view('about');
    }

     /**
     * Return the articles page.
     *
     * @return \Illuminate\Http\Response
     */
    public function articles()
    {
        return view('articlespage');
    }
}
