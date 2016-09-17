<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use Gate;

class ArticlesController extends Controller {

    public function show($id) {
        //Auth()->Logout;
        //auth()->logout();
        //Auth()->loginUsingId(1);
        //auth()->loginUsingId(2);

        $article = Article::find($id);

        //$this->authorize('update-post', $article);
        // if (Gate::denies('update-post', $article)) {
        //     //abort(403, 'Not Allow');
        //     return 'not allowed';
        // }

        //abort_unless(Gate::allows('show', $article), 403);

        //return $article->title;
//        if(auth()->user() && auth()->user()->can('update-articles', $article)){
//            return 'You can update the article';
//        }

        return view('articles', compact('article'));
    }

    public function store(Request $request) {
        $request->user()->can('show-articles');
    }
}
