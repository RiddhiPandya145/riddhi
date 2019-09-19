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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
return view('welcome');
//return "This is riddhi";
});
//
//Route::get('/about', function () {
//    //return view('welcome');
//    return "This is about";
//});
//

Route::get('/insert', function () {
    $page=DB::table('contact')->insert(array('id'=>'115','name'=>'riddhi','password'=>'12345'));
    //$page=DB::table('contact')->insert(array('id'=>'114','name'=>'krunal','password'=>'123456'));
return $page;

});

Route::get('/read', function () {

$results = DB::select('select * from contact');
    {
        foreach ($results as $page){

            return $page->name;
        }

    }

});


Route::get('/update', function () {

    $data= DB::update('update contact set id = 100 where name = ?', array('1'));
    return $data;
});

Route::get('/delete', function () {

    DB::delete('delete from contact');
});







//
//Route::get('/post/{name}/{id}', function ($name,$id) {
//    //return view('welcome');
//    return "This is " .$name ."And my id is " .$id;
//
//});
//
//Route::get('/post/example', array('as' => 'riddhi.project', function () {
//    //return view('welcome');
//    $url = route('riddhi.project');
//    return "This is exsample" .$url;
//
//}));
//



//Route::get('/post/{name}','PostController@create');

//
//Route::group(['middleware' =>'App\Http\Controllers'],function ()
//{
//    Route::get('/post','PostController@index');
//    Route::get('/post/{name}','PostController@create');
//}



//Route::resource('/post','PostController');
Route::get('/contact','PostController@contact');
Route::get('/about','PostController@about');
//Route::get('/blogs','PostController@blogs');

//
//Route::get('subject',function ()
//{
//    return view('subject');
//});

//Route::get('/ShowPost','PostController@subject');

//Route::get('/ShowPost/{name}','PostController@subject');
