<?php
// use  controller path

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\registerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

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

Route::get('admin', function () {
    return view('Admin.header');
});


Route::get('/Cancellation',function(){
    return view('Cancellation');
});

Route::get('/login',function(){
    return view('login');
});
Route::get('/book',function(){
    return view('Booking');
});


Route::get('/log',function(){
    return view('Admin.login');
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});

Route::get('/logout',function(){
    Session()->pull('email',null);
    return redirect('/');
});


// Admin 

Route::get('/add_com',function(){
    return view('Admin.add_com');
});


Route::get('/travel_agency',function(){
    return view('Admin.travel_agency');
});





// Register Controller

Route::post('register',[registerController::class,'reg']);
Route::post('login',[registerController::class,'login']);





// User Controller


Route::get('profile',[UserController::class,'profile']);
Route::post('changeProfile',[UserController::class,'changeProfile']);
Route::post('contact',[UserController::class,'contact']);
Route::get('/',[UserController::class,'home']);
Route::get('It',[UserController::class,'It_compay']);
Route::get('textile', [UserController::class, 'textile']);
Route::get('Automobile', [UserController::class, 'Automobile']);
Route::get('media', [UserController::class, 'media']);
Route::get('pepar', [UserController::class, 'pepar']);



// Company Controller

Route::post('add_com',[CompanyController::class,'company']);
Route::get('{companyName}', [CompanyController::class, 'show']);

