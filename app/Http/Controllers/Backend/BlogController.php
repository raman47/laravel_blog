<?php

namespace App\Http\Controllers\Backend;


use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;

class BlogController extends BackendController
{
    protected $limit = 5;
    protected $uploadPath;

    public function __construct(){
        //parent::__construct();
        $this->uploadPath = public_path('img/featuredBlogImages');
    }

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
        $data = $this->handleRequest($request);
        $request->user()->posts()->create($data);
        return redirect('/backend/blog')->with('message','Your Post was created successfully');
    }
    private function handleRequest($request){
        $data = $request->all();
        if($request->hasFile('image')){
            $image  = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $destination = $this->uploadPath;
            $image->move($destination, $fileName);
            $data['image'] = $fileName;
        }
        return $data;
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
