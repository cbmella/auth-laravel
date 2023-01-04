<?php

namespace App\Http\Controllers;

use Corcel\Model\Post as Post;
use Inertia\Inertia;

class PostController extends Controller
{

    public function blog()
    {
        return Inertia::render('Blog', [
            'posts' => Post::type('post')->published()->get(),
        ]);
    }

    public function article(Post $post)
    {
        return Inertia::render('Article', [
            'post' => $post,
        ]);
    }
}
