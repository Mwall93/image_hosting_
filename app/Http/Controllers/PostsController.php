<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    
    public function index(){

        return view('posts.index');
    }

    public function create(){

        return view('posts.create');

    }

    public function show(Post $post){

            return view('posts.show', compact('post'));

    }

    public function store(Request $request)
    {
         // dd(request()->all());

       // Validate input
       
        $this->validate(request(), [
            'title' => 'required',
            'fileToUpload' => 'required',
        ]);

        $img = $request->file('fileToUpload');

        $ext = $img->getClientOriginalExtension();
        $imageName = time().'.'.$ext;        
        $img->move(public_path('/uploadedimages'), $imageName);
       
        // $file = request()->file('fileToUpload');
        // $file->store(public_path(), ['disk' => 'public']);

        $post = Post::create([
            'title' => request('title'),
            'image_name' => $imageName
            //'user_id' => auth()->id()
        ]);
            
        return view("posts.show", compact('post')); 
    }
}
