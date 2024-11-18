<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});
Route::get('/about', function () {
    return view('about',['nama'=>'i wayan pius wiprajana samita', 'title'=>'About Page']);
});

Route::get('/posts', function () {
    return view('posts',['title'=>'blog Page','posts'=> [
        [
        'id'=>1,
        'slug'=>'judul-article-1',
        'title'=>'artikle 1',
        'author'=>'pius',
        'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus adipisci, distinctio sit provident nostrum earum reprehenderit, veritatis officiis qui at iure quibusdam possimus dolorum! Culpa sequi vitae enim quidem atque!'
        ],
        [
            'id'=>2,
            'slug'=>'judul-article-2',
            'title'=>'artikle 2',
            'author'=>'pius',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus adipisci, distinctio sit provident nostrum earum reprehenderit, veritatis officiis qui at iure quibusdam possimus dolorum! Culpa sequi vitae enim quidem atque!'
        ]
    
    ]]);
});

Route::get('/posts/{slug}',function($slug){
    

   $posts =  [
        [
        'id'=>1,
        'slug'=>'judul-article-1',
        'title'=>'artikle 1',
        'author'=>'pius',
        'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus adipisci, distinctio sit provident nostrum earum reprehenderit, veritatis officiis qui at iure quibusdam possimus dolorum! Culpa sequi vitae enim quidem atque!'
        ],
        [
            'id'=>2,
            'slug'=>'judul-article-2',
            'title'=>'artikle 2',
            'author'=>'pius',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus adipisci, distinctio sit provident nostrum earum reprehenderit, veritatis officiis qui at iure quibusdam possimus dolorum! Culpa sequi vitae enim quidem atque!'
        ]
    
        ];

        $post = Arr::first($posts,function($post) use ($slug) {
            return $post['slug']==$slug;
        });
        return view('post',['title'=>'singel post', 'post'=>$post]);

});

Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact Page']);
});

