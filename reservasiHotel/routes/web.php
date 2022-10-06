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

Route::get('/a', function () {
    return view('welcome');
});

Route::get("/laboum/create", [LaboumController::class, "create"])->name("laboum.create");

Route::post("/laboum/store", [LaboumController::class, "store"])->name("laboum.store");

Route::get('/laboum', [LaboumController::class, "index"])->name("laboum.index");
Route::get('/laboum/{laboum}', [LaboumController::class, "show"])->name("laboum.show");

Route::get('/laboum/{laboum}/edit', [LaboumController::class, 'edit'])->name('laboum.edit');
Route::get('/laboum/{laboum}/out', [LaboumController::class, 'out'])->name('laboum.out');
Route::patch('/laboum/{laboum}', [LaboumController::class, 'update'])->name('laboum.update');
Route::delete('/laboum/{laboum}', [LaboumController::class, 'destroy'])->name('laboum.destroy');

Route::get("/info", [LaboumController::class, "info"])->name("laboum.info");
Route::get("/welcome", [LaboumController::class, "welcome"])->name("laboum.welcome");

Route::get("/", [LaboumController::class, "login"])->name("laboum.login");
Route::post("/login", [LaboumController::class, "welcome"])->name("laboum.login");

Route::get('/customer', [LaboumController::class, "customer"])->name("laboum.customer");
