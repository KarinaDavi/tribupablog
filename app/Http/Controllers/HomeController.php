<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $catego = Category::find(1);
        //dd($catego->posts);
          $categories = Category::all();
        return view('posts', ['categories' => $categories]);
       //return view('posts');
    }

     public function post()
    {
        return view('post');
    }
}
