<?php

namespace App\Http\Controllers\Backend;


use App\Post;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use Intervention\Image\Facades\Image as InterventionImage;
class BlogController extends BackendController
{
    protected $limit = 5;
    protected $uploadPath;

    public function __construct(){
        //parent::__construct();
        $this->uploadPath = public_path(config('cms.image.directory'));
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
            $successUploaded = $image->move($destination, $fileName);
            if($successUploaded){
                $width = config('cms.image.thumbnail.width');
                $height = config('cms.image.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);
                InterventionImage::make($destination.'/'.$fileName)->resize($width,$height)->save($destination.'/'.$thumbnail);
            }
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
        $post = Post::findOrFail($id);
        return view("backend.blog.edit",compact('post'));
    }


    public function update(Requests\PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $this->handleRequest($request);
        $post->update($data);
        return redirect('/backend/blog')->with('message','Your Post was updated successfully');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        return redirect('/backend/blog')->with('trash-message',['Your Post moved to Trash',$id]);
    }
    public function restore($id){
         $post = Post::withTrashed()->findOrFail($id);
         $post->restore();
         return redirect('/backend/blog')->with('message','Your Post has been moved from trash');
    }
}
