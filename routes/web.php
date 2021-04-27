<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;

/* 
Routing
*/
require __DIR__.'/auth.php';
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/admin',
        'middleware' => [
            'auth',
            'localeSessionRedirect',
            'localizationRedirect',
            'localeViewPath' ]
    ],function (){

// Resource Routes
    Route::resources([

    '/services'=>ServicesController::class,
    '/projects'=>ProjectsController::class
    ]);
    Route::get('/dashboard', [DashboardController::class,'index']);
});

//Frontend Routes

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
Route::get('/',[PagesController::class,'index']);

});