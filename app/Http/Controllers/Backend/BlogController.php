<?php

namespace App\Http\Controllers\Backend;


use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;

class BlogController extends BackendController
{
    protected $limit = 5;

    public function index()
    {
        $posts = Post::with('category','author')->latest()->paginate($this->limit);
        $postCount = Post::count();
        return view("backend.blog.index",compact('posts','postCount'));
    }

    public function create(Post $post)
    {
        return view("backend.blog.create", compact('post'));
    }

    public function store(Requests\PostRequest $request)
    {

        $request->user()->posts()->create($request->all());
        return redirect('/backend/blog')->with('message','Your Post was created successfully');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
