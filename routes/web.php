<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\EmployeeController;
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::get('/employees/destroy', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::get('/employees/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::get('/employees/index', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/show', [EmployeeController::class, 'show'])->name('employees.show');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

use App\Http\Controllers\DepartmentController;
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
// Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
// Route::put('/departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
Route::get('/departments/index', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');

use App\Http\Controllers\AttendanceController;
Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances.create');
// Route::post('/attendances', [AttendanceController::class, 'store'])->name('attendances.store');
Route::get('/attendances/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');
// Route::put('/attendances/{attendance}', [AttendanceController::class, 'update'])->name('attendances.update');
Route::delete('/attendances/{attendance}', [AttendanceController::class, 'destroy'])->name('attendances.destroy');
Route::get('/attendances/index', [AttendanceController::class, 'index'])->name('attendances.index');
Route::get('/attendances/{attendance}', [AttendanceController::class, 'show'])->name('attendances.show');
