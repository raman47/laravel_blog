<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Support\Str;

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
        $post->increment('view_count');
        return view("blog.show", compact('post'));
    }
    public function author(User $author){

        //dd($author->name);
        $authorName = $author->name;
        $posts = $author->posts()
                        ->with('category')
                        ->latestFirst()
                        ->published()
                        ->paginate(5);

        return view('blog.index', compact('posts','authorName'));
    }
}
