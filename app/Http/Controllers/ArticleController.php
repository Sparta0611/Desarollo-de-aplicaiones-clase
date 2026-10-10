<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['id1' => 1, 'title' => 'first article', 'content' => 'content of the article'],
            ['id2' => 2, 'title' => 'second article', 'content' => 'content of the second article'],
            ['id3' => 3, 'title' => 'third article', 'content' => 'content of the third article'],
        ];
        return Inertia::render('articles/index',[
            'articles' => $articles
        ]);
    }
}

