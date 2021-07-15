<?php

use App\Http\Controllers\MembreController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::get('/', [MembreController::class,'index']);
// Create
Route::get('/createMembre', [MembreController::class,'create']);
Route::post('/postMembre', [MembreController::class,'store']);
// Read
Route::get('/showMembre/{id}', [MembreController::class,'show']);
// Update
Route::get('/editMembre/{id}', [MembreController::class,'edit']);
Route::put('/putMembre/{id}', [MembreController::class,'update']);
// Delete
Route::delete('/deleteMembre/{id}', [MembreController::class,'destroy']);

Route::get('/deleteAllMembre', function () {
    DB::table('Membres')->delete();
    return redirect("/");
});
