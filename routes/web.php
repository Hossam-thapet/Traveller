<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();




Route::get('/', 'TourController@index_home');
Route::group(['middleware' => ['auth']], function() {

    Route::get('/submit', function () {

        $details = [
            'title' => 'Confirmation OF your Ticket request ',

        ];

        \Mail::to(Auth::user()->email)->send(new \App\Mail\MyTestMail($details));

        return redirect()->back()->with('success','Email Sent');
    });
    Route::resource('tours','TourController');
    Route::get('admin','TourController@index_admin');
    Route::get('submit_tour/{id}','TestController@addtour');
    Route::resource('comment','CommentController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/search', 'QueryController@search');
    Route::get('/class_spc', 'QueryController@class_spc');


});
