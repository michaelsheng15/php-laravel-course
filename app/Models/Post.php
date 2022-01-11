<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //3 ways to mitigate mass assignment vulnerbilities
    //assignemtn refers to using Post::create([fields])

    //1 - gaurding certain fields from assignment
    // protected $guarded =['id']; 

    //2 - being explicit about field that can be assigned
    // protected $fillable = ['title', 'excerpt', 'body'];

    //3 - turning off assignemnt completely
    protected $guarded =[]; 

    //post belongs to a category
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //post belongs to a author
    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
