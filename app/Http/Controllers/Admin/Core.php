<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Article;
use App\User;
use App\Countrys;
use App\Role;

class Core extends Controller
{
    public function __construct()
    {
        //$this->middleware('mymiddle');
    }

    public function getArticles(Request $request)
    {
        //$country = Countrys::find(1);
        /*$article = Article::find(2);
        $article->forceDelete();*/
        /*$articles = Article::all();*/
        //dump($country->user());
        //$user = Users::find(1); // получил пользователя

        //$articles = Article::find(3);

        /*foreach ($articles as $article) {
            echo $article->text.'<br>';
        }*/
        //$user = User::find(1);
        $role = Role::find(1);
        //$role = $user->roles()->where('roles.id',1)->first();
        dump($role->users);
        
        return;
    }

    public function getArticle($id)
    {

        echo $id;
    }
}
