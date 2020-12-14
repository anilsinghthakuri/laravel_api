<?php

use App\Http\Controllers\apicontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data',[apicontroller::class,'get_data']);
Route::get('/data/{id}',[apicontroller::class,'get_data_by_id']);
Route::post('/data-insert',[apicontroller::class,'insert_data']);
Route::put('/data-update',[apicontroller::class,'update_by_id']);
Route::get('/data-search/{name}',[apicontroller::class,'search_by_name']);
