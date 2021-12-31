<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('employees',[EmployeeController::class, 'getEmployee']);
Route::get('/employees/{id}',[EmployeeController::class, 'getSingleEmployee']);
Route::post('add-emp',[EmployeeController::class, 'addNewEmployee']);
Route::put('update-emp/{id}',[EmployeeController::class, 'updateEmp']);
Route::delete('delete-emp/{id}',[EmployeeController::class, 'deleteEmp']);