<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    AssignmentController
};
use Illuminate\Support\Facades\Redirect;

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
    // return view('welcome');
    return Redirect::to("https://bargros.id");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["middleware" => "auth"], function () {
    Route::resource("/users", UserController::class);
    
    Route::resource("/assignment", AssignmentController::class);
    Route::get("/assignment/{assign_id}/finish", [AssignmentController::class, "finished"]);
});