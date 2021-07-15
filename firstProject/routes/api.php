<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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


// Get all employees
Route::get('employees', 'EmployeeContoller@getEmployee');

// Get Specic employee detail
Route::get('employee/{id}', 'EmployeeContoller@getEmployeeById');

// Add Employee
Route::post('addEmployee', 'EmployeeContoller@addEmployee');

// Update Employee
Route::put('updateEmployee/{id}', 'EmployeeContoller@updateEmployee');

// Delete Employee
Route::delete('deleteEmployee/{id}', 'EmployeeContoller@deleteEmployee'); 

//Get Company join 
Route::get('show',[CompanyController::class,'show']); 

// Add Company
Route::post('addCompany', 'CompanyController@addCompany');