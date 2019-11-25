<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::with('author')
        ->latestFirst()
        ->published()
        ->paginate(3);
        return view('blog.index', compact('posts'));
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view("blog.show", compact('post'));
    }
}
