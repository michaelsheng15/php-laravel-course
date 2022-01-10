<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($id) {
    $post = Post::findOrFail($id);

    return view('post', [
        'post' => $post
    ]);
});
