<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});
Route::get('/about', function () {
    return view('about',['nama'=>'i wayan pius wiprajana samita', 'title'=>'About Page']);
});

Route::get('/posts', function () {
    return view('posts',['title'=>'blog Page','posts'=> Post::all() ]);
});

Route::get('/posts/{post:slug}',function(Post $post){
    

  

      
        return view('post',['title'=>'singel post', 'post'=>$post]);

});
Route::get('/author/{user:user_name}',function(User $user){
        return view('posts',['title'=> count($user->posts). ' article by '. $user->name , 'posts'=>$user->posts]);
});
Route::get('/categories/{category:slug}',function(Category $category){
        return view('posts',['title'=> 'article in: '. $category->name , 'posts'=>$category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact Page']);
});

