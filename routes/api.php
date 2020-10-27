<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\DutyController;
use App\Http\Controllers\VehicleController;
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

Route::resource('personnels', PersonnelController::class);

Route::resource('duties', DutyController::class);

// Route::get('/personnel/index', 'PersonnelController@index')


// Route::get('/user', function () {
//     return new PersonnelResource(User::find(1));
// });