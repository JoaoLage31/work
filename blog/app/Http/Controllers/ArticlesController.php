<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article =['id'=>'1','title'=>'titulo','excerpt'=>'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.','body'=>'PHP Error:  Call to undefined method stdClass::save() in Psy Shell code on line 1PHP Error:  Call to undefined method stdClass::save() in Psy Shell code on line 1'];

        return view('articles.show', compact('article'));
    }
}
