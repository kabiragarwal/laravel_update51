<?php
//
//View::composer('stats', function($view){
//    $view->with('stats', app('App\Stats'));
//});

Route::resource('article', 'ArticlesController');
//Route::get('articles/{article}', 'ArticlesController@show');
Route::get('/', function () {
    return view('welcome');
});

Route::get('other', function () {
    return view('other');
});

Route::get('posts', function(){
    return view('posts')->with('posts', App\Post::all());
});

Route::get('admin', ['middleware' => 'admin:test',function(){
	return 'hello Admin Rahul';
}]);

Route::group(['prefix'=>'admin'], function(){
    Route::get('home', ['as'=>'home', function(){
        return 'some view';
    }]);
});


Route::group(['prefix'=>'admin'], function(){
    Route::get('home', ['as'=>'admin.home', function(){
        return 'some view';
    }]);
});

//Route::group(['prefix'=>'admin', 'as'=>'Admin.'], function(){
//    Route::get('home', ['as'=>'home', function(){
//        return 'some view';
//    }]);
//});
//
//Route::group(['prefix'=>'admin', 'as'=>'Admin::'], function(){
//    Route::get('home', ['as'=>'home', function(){
//        return 'some view';
//    }]);
//});

//dd(route('home'));
//dd(route('Admin.home'));
//dd(route('Admin::home'));
Route::get('/logout', 'Auth\LoginController@logout');
Route::auth();

Route::get('/home', 'HomeController@index');

use App\Events\UserHasRegistered;

Route::get('/eventpage', function(){
    return view('pusher');
});

Route::get('broadcast', function(){
    $name = Request::input('name');
    event(new UserHasRegistered($name));

    return 'Done';
});

Route::get('/role', function(){
    Auth::loginUsingId(2);
    return view('role');
});
