<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;

class BlogController extends Controller
{
    public function index(){
        $post = Post::all();

        return view('blog.index')->with(['post' => $post]);
     
    }
    public function store(Request $request){
       post::create([
           'title'=> $request->title,
           'body'=> $request->body
       ]);

       return back();
    }
}
