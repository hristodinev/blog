<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //@dd(request('author'));
        return view('posts', [
            'posts'=>Post::latest()
            ->filter(request(['search', 'category', 'author']))
            ->paginate(5)
            ->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'post'=>$post
        ]);
    }
}
