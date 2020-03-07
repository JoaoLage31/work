<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $article =['id'=>'1','title'=>'titulo','excerpt'=>'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro.','body'=>'PHP Error:  Call to undefined method stdClass::save() in Psy Shell code on line 1PHP Error:  Call to undefined method stdClass::save() in Psy Shell code on line 1'];

    $articles = []; 
    for($i  = 0; $i<3;$i++){
        array_push($articles,$article);
    }
    // $article['title'];

    return view('about',compact('articles'));
});

Route::get('/articles/{article}','ArticlesController@show');

