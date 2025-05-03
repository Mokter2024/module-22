<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {  $posts = Post::all();
        $categories = Category::all();

        return view('index', compact('posts', 'categories'));
    }
}
