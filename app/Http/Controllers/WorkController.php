<?php

namespace App\Http\Controllers;

use Corcel\Model\Post as Post;
use Inertia\Inertia;

class WorkController extends Controller
{

    public function index()
    {
        return Inertia::render('Briefcase', [
            'works' => Post::type('work')->published()->get(),
        ]);
    }


/*     public function show(Post $post)
    {
        return Inertia::render('Post', [
            'post' => $post,
        ]);
    } */
}
