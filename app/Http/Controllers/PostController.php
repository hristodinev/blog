<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        return view('posts', [
            'posts'=>Post::latest()
            ->filter(request(['search', 'category', 'author']))
            ->Simplepaginate(5)
            ->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'post'=>$post,
            'comments'=>Comment::all()
        ]);
    }
}
