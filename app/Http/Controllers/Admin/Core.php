<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Article;

class Core extends Controller
{
    public function __construct()
    {
        //$this->middleware('mymiddle');
    }

    public function getArticles(Request $request)
    {
        //$articles = Article::where('id', '>', 3)->get();
        // dump($articles);
        /*foreach ($articles as $article)
        {
            echo $article->text.'<br>';
        }*/
        /*$article = new Article;

        $article->name = 'New Name';
        $article->text = 'New Text';
        $article->img = 'New Images';*/

        /*$article = Article::find(4);
        $article->name = 'Senior Magento 2 Developer';
        $article->text = 'Senior Magento 2 Developer';
        $article->img = 'Senior Magento 2 Developer';
        $article->save();
        $articles = Article::find(4);*/
        /*Article::create(
                        [
                            'name'=>'Hello World',
                            'text'=>'Some Text',
                            'img'=>'Any Text'
                        ]
                        );*/

        /*$article = Article::find(1);

        $article->delete();*/
        //$articles = Article::onlyTrashed()->restore();
        //$articles = Article::all();
        /*foreach ($articles as $article) {
            if($article->trashed()) {
                echo $article->id.' Delete<br>';
                $article->restore();
            } else {
                echo $article->id.' Not Delete<br>';
            }
        }*/
        $article = Article::find(2);
        $article->forceDelete();
        /*$articles = Article::all();
        dump($articles);*/
        return;
    }

    public function getArticle($id)
    {

        echo $id;
    }
}
