<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($articlesid){
        $article = Article::find($id);

        return view('articles.show', ['artilce'=>$article]);
    }
}
