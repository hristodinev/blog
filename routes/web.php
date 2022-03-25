<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $posts= Post::latest();
    

    if(request('search')){
        $posts->where('title', 'like', '%'.request('search').'%');
    }

    return view('posts', [
        'posts'=>$posts->get(),
        'categories'=>Category::all()
    ]);
});

Route::get('posts/{post:slug}', function(Post $post){
    return view('post', [
        'post'=>$post
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts_cat', [
        'posts'=>$category->posts
    ]);
});

Route::get('authors/{author:username}', function(User $author){
    return view('posts_author', [
        'posts'=>$author->posts
    ]);
});
