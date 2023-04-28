<?php


namespace App\Http\Controllers;
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
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/register',function(){
    return view('cars.view');
});
Route::get('/login',function(){
    return view('users.login');
});
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/search',[HomeController::class,'search'])->name('search');

//
Route::get('/cars',[CarsController::class,'index'])->name('cars.index');
Route::get('/cars/create',[CarsController::class,'create'])->name('cars.create');
Route::post('/cars',[CarsController::class,'store'])->name('cars.store');
Route::get('/cars/{id}',[CarsController::class,'show'])->name('cars.show');
Route::get('/cars/{id}/edit',[CarsController::class,'edit'])->name('cars.edit');
Route::put('/cars/{id}',[CarsController::class,'update'])->name('cars.update');
Route::delete('/cars{id}',[CarsController::class,'destroy'])->name('cars.destroy');
// Route::resource('cars', CarsController::class);

Route::resource('commands', CommandsController::class);
Route::resource('admin', AdminController::class);
Route::resource('users', UsersController::class);

Route::post('/login',[UsersController::class,'login'])->name('users.login');
Route::post('/delete/command/{id}',[UsersController::class,'deleteCommand'])->name('user.command.destroy')->middleware('auth');
Route::get('/logout',[UsersController::class,'logout'])->name('users.logout')->middleware('auth');
Route::get('/delete/car/{id}',[CarsController::class,'destroy'])->name('cars.destroy')->middleware('auth');
Route::get('/delete/{id}',[UsersController::class,'destroy'])->name('users.destroy')->middleware('auth');
Route::get('/delete/{id}',[CommandsController::class,'destroy'])->name('commands.destroy')->middleware('auth');


/*
Route::get('/',[
    'uses'=>'HomeController@index',
    'as'=>'home'
]);
Route::post('/search',[
    'uses'=>'HomeController@search',
    'as'=>'search'
]);
Route::resource('cars','CarsController');
Route::resource('commands','CommandsController');
Route::resource('admin','AdminController');
Route::resource('users','UsersController');
Route::get('/register',function(){
    return view('cars.view');
});
Route::get('/login',function(){
    return view('users.login');
});
Route::post('/login',[
    'uses'=>'UsersController@login',
    'as'=>'users.login'
]);

Route::get('/', function () {
    return view('welcome');
});

*/
