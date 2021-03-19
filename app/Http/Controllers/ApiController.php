<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class ApiController extends Controller
{
    //this function return all post rows
    public function index(Request $request){
        $posts = post::all();

        return response($posts, 200);
    }
    //return post details
    public function get_detail(Request $request){
        $post = post::find($request->post_id);

        if($post == null){
            return response(['message'=>'There is no post'],404);
        }

        return response($post,200);
    }


}
