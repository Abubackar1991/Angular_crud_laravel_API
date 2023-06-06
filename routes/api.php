<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::controller(EmployeeController::class)->group(function () {
    Route::post('/employee/saveEmployee', 'store');
    Route::get('/employee/getAllEmployee', 'index');
    Route::get('/employee/getEmployeeDetailById/{employee}', 'show');
    Route::post('/employee/EditEmployee/{employee}', 'edit');
    Route::post('/employee/deleteEmployeeById/{employee}', 'destroy');
    /* Route::get('/employee/getAllEmployee', function(){
        echo json_encode(['message' => 'Hello World!']);
    })->middleware('cors'); */
});


