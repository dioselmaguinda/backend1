<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CollegeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/college', [CollegeController::class, 'index']);
Route::get('/college/{id}', [CollegeController::class, 'show']);
Route::post('/college', [CollegeController::class, 'store']);
Route::delete('/college/{id}', [CollegeController::class, 'destroy']);

// Route::get('/greeting', function (){
//     return 'Hello World';
// });