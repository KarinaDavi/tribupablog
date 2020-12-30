<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class FrontendController extends Controller
{
    public function index() {
        $posts = Post::all();
        $categories = Category::all();
        return view('posts', ['posts' => $posts, 'categories' => $categories]);
    }

    public function show($param)
    {
        $categories = Category::all();
        $posts = Post::where('id', $param)
                        ->orWhere('category_id', $param)
                        ->firstOrFail();

            return view('show', ['post' => $posts]);
        }
}