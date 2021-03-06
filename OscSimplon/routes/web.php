<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Routing\Route as RoutingRoute;

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
Route::post("/updateEntreprise",[AdminController::class,"update"]);
Route::get("deleteEntreprise/{id}",[AdminController::class,"deleteEntreprise"]);
Route::get("/entrepriseUpdate/{id}",[AdminController::class,"entrepriseUpdate"]);
Route::post("/updateEntreprise/{id}",[AdminController::class,"updateEntreprise"]);
Route::GET("/detailsEntreprise/{id}",[AdminController::class,"detailsEntreprise"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


