<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Super Admin
|--------------------------------------------------------------------------
| Access:
| - super_admin
*/
Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/organizations', [OrganizationController::class, 'index']);
});


/*
|--------------------------------------------------------------------------
| Employee Module (HR)
|--------------------------------------------------------------------------
| Access:
| - org_hr
| - org_admin
| - super_admin
| Org users see only their own organization’s data
*/

Route::middleware([
    'auth',
    'role:org_hr,org_admin',
    'org.access',
])->group(function () {

    Route::get('/employees', [EmployeeController::class, 'index']);
    Route::get('/employees/create', [EmployeeController::class, 'create']);
    Route::post('/employees', [EmployeeController::class, 'store']);
    Route::get('/employees/{id}', [EmployeeController::class, 'show']);
});

/*
|--------------------------------------------------------------------------
| Leads / CRM Module (Sales)
|--------------------------------------------------------------------------
| Access:
| - org_sales
| - org_admin
| - super_admin
| Org users see only their own organization’s data
*/

Route::middleware([
    'auth',
    'role:org_sales,org_admin',
    'org.access',
])->group(function () {

    Route::get('/leads', [LeadController::class, 'index']);
	Route::get('/leads/create', [LeadController::class, 'create']);
    Route::post('/leads', [LeadController::class, 'store']);    
    Route::get('/leads/{id}', [LeadController::class, 'show']);
});


Route::middleware(['auth', 'role:super_admin'])
    ->get('/platform/dashboard', function () {
        return view('platform.dashboard');
});


Route::middleware(['auth', 'role:org_admin,org_hr,org_sales'])
    ->get('/org/dashboard', function () {
        return view('org.dashboard');
});

