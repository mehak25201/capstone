<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;
 use App\Http\Controllers\adminController;
 
 use App\Http\Controllers\userController;
 use App\Http\Controllers\table1Controller;
 use App\Http\Controllers\videoController;



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


// // Route::get('/login', function () {
// //     return view('login');
// // });

//   Route::get('signup',[loginController::class,'show']);
//   Route::get('signupData',[loginController::class,'signupData']);

//  Route::get('pform',[productController::class,'prodform']);
//  Route::get('insertdata',[productController::class,'insertdata']);
//  Route::get('display',[productController::class,'displayData']);
//  Route::get('delete/{id}',[productController::class,'deleteData']);
//  Route::get('update/{id}',[productController::class,'updateform']);
//  Route::get('updateData/{id}',[productController::class,'updateData']);


 Route::get('/adm', function () {
     return view('Admin');
 });
 Route::get('/sign',[adminController::class,'show']);





// Route::get('/user',[userController::class,'insertData']);
// Route::get('/signupData',[userController::class,'userData']);
// Route::get('/userview',[userController::class,'showData']);
// Route::get('delete/{id}',[userController::class,'deleteData']);

// Route::get('/table1',[table1Controller::class,'showT1']);
// Route::get('/Table1',[table1Controller::class,'insertT1']);
// Route::get('/displaymusic',[table1Controller::class,'displaydata']);

Route::get('/table2',[videoController::class,'showT2']);