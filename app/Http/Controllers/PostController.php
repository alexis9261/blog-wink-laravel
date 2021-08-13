<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkTag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = WinkPost::live()
          ->orderBy('publish_date', 'DESC')
          ->paginate(15);

        $tags = WinkTag::all();

        return view('posts.index', [
            'posts' => $posts,
            'tags' => $tags,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(WinkPost $post)
    {
        $other_posts = WinkPost::orderBy('publish_date', 'DESC')
        ->take(8)->get();
        $tags = WinkTag::all();

        return view('posts.show', [
                'post' => $post,
                'tags' => $tags,
                'other_posts' => $other_posts,
            ]);
    }


}

