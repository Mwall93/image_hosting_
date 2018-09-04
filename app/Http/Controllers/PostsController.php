<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        ]);

        $post = Post::create([
            'title' => request('title'),
            //'user_id' => auth()->id()
        ]);

        // session()->flash(
        //     'message', 'Post saved successfully.'
        // );

        return view("posts.show", compact('post')); 
    }
}
