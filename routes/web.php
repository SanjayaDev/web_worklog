<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\{
//     UserController,
//     AssignmentController
// };

use App\Http\Livewire\{
    Assignment\Index as AssignmentIndex,
    Assignment\Create as AssignmentCreate
};

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["middleware" => "auth"], function () {
    Route::resource("/users", UserController::class);
    
    // Route::resource("/assignment", AssignmentComponent::class);
    Route::group(["prefix" => "/assignment"], function () {
        Route::get("/", AssignmentIndex::class);
        Route::get("/create", AssignmentCreate::class);
    });
    Route::get("/assignment/{assign_id}/finish", [AssignmentComponent::class, "finished"]);
});
