<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post{

    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all(){

        //storing collection into cache
        return cache() -> rememberForever('posts.all', function(){
            //collects all posts under the $files directory
            return collect(File::files(resource_path("posts"))) 
            //maps over each file in collection and returns the parsed document
            -> map(fn($file) => YamlFrontMatter::parseFile($file))
            //maps over each parsed document and returns a Post object which is stored in the $posts array
            -> map(function ($document){
                return new Post(
                    $document -> title,
                    $document -> excerpt,
                    $document -> date,
                    $document -> body(),
                    $document -> slug,
                );
            })
            ->sortByDesc('date'); //sorts collection by descending date
        });
    }

    public static function find($slug){
        
        //gets all posts
        $posts = static::all()->firstWhere('slug', $slug);

        if(! $posts){
            throw new ModelNotFoundException();
        };
       
        //return the first post in the collection where the 'slug' of the post matches the post of the $slug passed into function
        return $posts;

    }

    public static function findOrFail($slug){
        
        //gets all posts
        $post = static::find($slug);

        if(! $post){
            throw new ModelNotFoundException();
        };
       
        //return the first post in the collection where the 'slug' of the post matches the post of the $slug passed into function
        return $post;

    }

    
}