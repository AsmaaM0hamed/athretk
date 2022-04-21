<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



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

Route::group([

	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
 function()
{
     //frontend

    Route::controller(HomeController::class)->group(function()
    {
        Route::get('/',"index")->name("/");
        route::get('/services',"services")->name("services");
        route::get('/allProjects',"projects")->name("allProjects");
        route::get("/news","news")->name("news");

    });



    //backend

Route::middleware(['auth'])->group(function()
{

    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('dashboard');

    Route::resource('AdminServices',ServiceController::class);

    Route::resource('projects',ProjectController::class);

    Route::resource('post',PostController::class);

    Route::get('admin',[AdminController::class,"index"])->name("admin");
   Route::get('Admindestroy/{id}',[AdminController::class,"Admindestroy"])->name("Admindestroy");
});

    require __DIR__.'/auth.php';
});




