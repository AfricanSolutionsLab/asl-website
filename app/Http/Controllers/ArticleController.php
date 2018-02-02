<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles=Article::listePaginate(10);
        $categories=Categorie::liste(10);
        return view('blogs',compact('articles','categories'));
    }
}
