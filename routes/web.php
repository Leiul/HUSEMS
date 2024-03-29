<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ExamCoordinator\ExamCoordinatorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Student\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\college\CollegeController;
use App\Http\Controllers\college\CollegeListController;
use App\Http\Controllers\department\DepartmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    // Routes accessible to users with the 'admin' role
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// examCoordinator
Route::middleware(['auth', 'role:examCoordinator'])->group(function () {
    // Routes accessible to users with the 'admin' role
    Route::get('examCoordinator/dashboard', [ExamCoordinatorController::class, 'dashboard'])->name('examCoordinator.dashboard');
});

// student
Route::middleware(['auth', 'role:student'])->group(function () {
    // Routes accessible to users with the 'admin' role
    Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
});

Route::get('admin/dashboard/addCollege', [CollegeController::class, 'addCollege'])->name('addCollege');
//Route::get('admin/dashboard/addDepartment', [CollegeController::class, 'addDepartment'])->name('addDepartment');
Route::post('addCollegeFromForm', [CollegeController::class, 'storeCollege'])->name('addCollegeFromForm');;
Route::get('collegeList', [CollegeListController::class, 'collegeList'])->name('collegeList');


Route::get('addDepartment', [DepartmentController::class, 'addDepartment'])->name('addDepartment');
Route::post('addDepartmentFromForm', [DepartmentController::class, 'storeDepartment'])->name('storeDepartment');
//Route::get('departmentList', [DepartmentListController::class, 'departmentList'])->name('departmentList');


//Route::get('admin/dashboard/addCoordinator', [CoordinatorController::class, 'addCoordinator'])->name('addCoordinator');
//Route::post('addCoordinatorFromForm', [CoordinatorController::class, 'storeCoordinator'])->name('storeCoordinator');
//Route::get('coordinatorList', [CoordinatorListController::class, 'coordinatorList'])->name('coordinatorList');



require __DIR__ . '/auth.php';
