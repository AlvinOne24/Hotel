<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaboumController;
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

Route::get("/laboum/create", [LaboumController::class, "create"])->name("laboum.create");
Route::get("/laboum/create2", [LaboumController::class, "create2"])->name("laboum.create2");
Route::get("/laboum/create3", [LaboumController::class, "create3"])->name("laboum.create3");
Route::get("/laboum/create4", [LaboumController::class, "create4"])->name("laboum.create4");
Route::get("/laboum/create5", [LaboumController::class, "create5"])->name("laboum.create5");
Route::get("/laboum/create6", [LaboumController::class, "create6"])->name("laboum.create6");

Route::post("/laboum/store", [LaboumController::class, "store"])->name("laboum.store");

Route::get('/laboum', [LaboumController::class, "index"])->name("laboum.index");
Route::get('/laboum/{laboum}', [LaboumController::class, "show"])->name("laboum.show");

Route::delete('/laboum/{laboum}', [LaboumController::class, 'destroy'])->name('laboum.destroy');

Route::get("/info", [LaboumController::class, "info"])->name("laboum.info");
Route::get("/welcome", [LaboumController::class, "welcome"])->name("laboum.welcome");