<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/uppercase/{word?}', function ($word = 'word') {
    return strtoupper($word);
});

Route::get('/increment/{num?}', function ($num = 0) {
    return ++$num;
});

Route::get('/add/{numa?}/{numb?}', function ($numa=0,$numb=0) {
    return $numa + $numb;
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello/{name?}', function ($name = 'my friend') {
    if($name =='anna'){
    	return redirect('/test');
    }
    return 'Hello '.$name;

});

Route::get('/test', function () {
    return view('test');
});

Route::get('/generate', function () {
    $adjectives = ['fuzzy','big','lame','pastey','expedient'];
    $nouns = ['mint-chocolate chip icecream','bunny','spoon'];

    $name = $adjectives[mt_rand(0,sizeof($adjectives)-1)] . ' ' . $nouns[mt_rand(0,sizeof($nouns)-1)];
    return $name;
});