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
Route::post("/laboum/store", [LaboumController::class, "store"])->name("laboum.store");

Route::get('/laboum', [LaboumController::class, "index"])->name("laboum.index");
Route::get('/laboum/{laboum}', [LaboumController::class, "show"])->name("laboum.show");

