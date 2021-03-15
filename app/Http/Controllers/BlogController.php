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
    public function get_blog($id){
        $blog = post::find($id);

        if($blog == null)
        return response(['message'=> 'no such blog'],404);

        return view('blog.detail')->with(['blog'=> $blog]);

    }
}
