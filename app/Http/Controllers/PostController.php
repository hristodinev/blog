<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
        return view('posts', [
            'posts'=>Post::latest()
            ->filter(request(['search', 'category', 'author']))
            ->paginate(10)
            ->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'post'=>$post
        ]);
    }
}
