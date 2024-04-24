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

use App\Http\Controllers\DepartmentController;
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::delete('/departments/{department}/destroy', [DepartmentController::class, 'destroy'])->name('departments.destroy');
Route::get('/departments/index', [DepartmentController::class, 'index'])->name('departments.index');
// Route::get('/departments/{department}/show', [DepartmentController::class, 'show'])->name('departments.show');
Route::post('/departments/store', [DepartmentController::class, 'store'])->name('departments.store');
Route::put('/departments/{department}/update', [DepartmentController::class, 'update'])->name('departments.update');

use App\Http\Controllers\EmployeeController;
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::delete('/employees/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::get('/employees/index', [EmployeeController::class, 'index'])->name('employees.index');
// Route::get('/employees/{employee}/show', [EmployeeController::class, 'show'])->name('employees.show');
Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employees.store');
Route::put('/employees/{employee}/update', [EmployeeController::class, 'update'])->name('employees.update');

use App\Http\Controllers\AttendanceController;
Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances.create');
Route::get('/attendances/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');
Route::delete('/attendances/{attendance}/destroy', [AttendanceController::class, 'destroy'])->name('attendances.destroy');
Route::get('/attendances/index', [AttendanceController::class, 'index'])->name('attendances.index');
// Route::get('/attendances/{attendance}/show', [AttendanceController::class, 'show'])->name('attendances.show');
Route::post('/attendances/store', [AttendanceController::class, 'store'])->name('attendances.store');
Route::put('/attendances/{attendance}/update', [AttendanceController::class, 'update'])->name('attendances.update');
