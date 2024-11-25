<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
    }

    public static function find($slug){
        $post = Arr::first(static::all(), fn($post)=> $post['slug']==$slug);
        // return Arr::first(static::all(),function($post) use ($slug) {
        //     return $post['slug']==$slug;
        // });


        if (! $post) {
            abort(404);
        }
        return $post;
    }
}


