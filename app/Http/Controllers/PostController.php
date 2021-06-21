<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        //
        $posts = Post::all();

        $data = [
            'posts' => $posts
        ];
        return view('guests.posts.index', $data);
    }

    public function show($id)
    {
        //
        $post = Post::findOrFail($id);

        $data = [

            'post' => $post
        ];

        return view('guests.posts.show', $data);
    }

}
