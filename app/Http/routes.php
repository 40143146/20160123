<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('service', function () {
    return view('service');
});


Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('contact', function () {
    return view('contact');
});


/*
Route::get('/', function () {
    return view('welcome');
    //throw new \Exception('Tracy works!');
});
/*
Route::get('hello',function(){
	return view('hello');
});
/*
Route::get('dashboard',function(){
	return 'dashboard';
});

Route::group(['prefix' => 'admin'],function(){
	Route::get('dashboard',function(){
		return 'dashboard';
	});
});




/*
Route::get('hello', ['as' => 'Hello',function () {
    return view('welcome');
}]);

/*
Route::get('Hello/', function () {
    return 'Hello!';
})
->where('id','[0-9]+');

Route::get('Hello/{name?}', function ($name = 'everybody') {
    return 'Hello,'.$name;
    //throw new \Exception('Tracy works!');
});*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
