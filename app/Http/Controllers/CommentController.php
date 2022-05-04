<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Post $post){
        
        //add some validation
        request()->validate(['comment_body'=>'required']
        );

        $post->comments()->create([
             'user_id'=>auth()->user()->id,
             'body'=>request('comment_body')
        ]);
        return back();
    }
}
