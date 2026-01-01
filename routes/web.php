<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[UserController::class,'dasboard']);
Route::view('table','tables');
Route::view('master','layouts.master');
Route::view('index','index');
Route::view('chart','charts');
Route::view('form','forms');
Route::view('login','login');
Route::post('login',[UserController::class,'login']);
Route::view('signup','signup');
Route::post('signup',[UserController::class,'signup']);
Route::view('display','display');
Route::get('display',[UserController::class,'fetch']);
//delete data
Route::get('delete/{id}',[UserController::class,'delete']);
Route::get('edit/{id}',[UserController::class,'showData']);
//update show data;
Route::view('editdisplay','edit');
///finally updated data;
//Route::group(['middleware'=>'auth'],function(){

	Route::put('update/{id}',[UserController::class,'update'])->name('editData');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', function () {
   $data = User::updateOrCreate(
   	['id'=>21],
     [
    	'name'=>'mahwish khan',
        'email'=>'mahwish@gmail.com',
        'mobile'=>'9345604605',
        'password'=>'4545465',
    ]    
    );
   $get = $data->get();
   return view('test',['display'=>$get]);
});


Route::get('profile/{user_id}', [ProfileController::class, 'showProfile']);

