<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('home');
});

Route::get("/home",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);
Route::get("/user",[AdminController::class,"user"]);
Route::get("/deleteUser/{id}",[AdminController::class,"deleteUser"]);
// manage of entreprise part
Route::get("/entreprise",[AdminController::class,"entreprise"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

