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

    return view('welcome',['website'=>'Laravel']);
});

//Route::view('view','welcome',['website'=>'laravel学院']);

//Route::get('user','UserController@test')->middleware('web');

// Route::group(['middleware' => ['web']], function () {
    
// });

Route::get('user','UserController@show');

Route::post('test','UserController@test');

// Route::group(['middleware'=>['web']],function(){

//     Route::get('user', 'UserController@show');
// });

// Route::match(['get','post'],'bar', function () {

//     return 'This is a request from any HTTP verb';
// });

// Route::get('form',function () {

//     return '<form method="post" action="bar">'.csrf_field().'<button type="submit">提交</button></form>';
// });


// Route::middleware('apii')->group(function () {

//     Route::get('user/profile','UserController@show');
// });


// Route::domain('{account}.yk.yk')->group(function () {

//     Route::get('user/{id}', function ($account, $id) {

//         return 'This is ' . $account . ' page of User ' . $id;
//     });
// });

// Route::middleware('api','throttle:10,1')->group(function () {

//     Route::get('user', function () {
        
//         return 'this is a bad word';
//     });
// });

// Route::get('form_without_csrf_token', function (){

//     return '<form method="POST" action="hello_from_form"><button type="submit">提交</button></form>';
// });

// Route::get('form_with_csrf_token', function () {

//     return '<form method="POST" action="hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
// });

// Route::post('hello_from_form', function (){

//    return 'hello laravel!';
// });

// Route::get('cookie/add', function () {
//     $minutes = 24 * 60;
//     return response('欢迎来到 Laravel 学院')->cookie('name', '学院君', $minutes);
// });

// Route::get('cookie/get', function(\Illuminate\Http\Request $request) {
//     $cookie = $request->cookie('name');
//     dd($cookie);
// });


