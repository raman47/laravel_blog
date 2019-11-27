<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    public function index(){

        $posts = Post::with('author')
        ->latestFirst()
        ->published()
        ->paginate(3);
        return view('blog.index', compact('posts'));
    }

    public function category(Category $category){

            $categoryName = $category->title;

  
        $posts = $category->posts()
                        ->with('author')
                        ->latestFirst()
                        ->published()
                        ->paginate(5);

        return view('blog.index', compact('posts','categoryName'));
    }
    public function show(Post $post){
       
        return view("blog.show", compact('post'));
    }
}
