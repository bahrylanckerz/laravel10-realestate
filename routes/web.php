<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/password/change', [AdminController::class, 'changePassword'])->name('admin.password.change');
    Route::post('/admin/password/change', [AdminController::class, 'changePasswordStore'])->name('admin.password.change.store');
    Route::put('/admin/profile', [AdminController::class, 'profileUpdate'])->name('admin.profile.update');

    Route::get('/admin/propertytype/index', [PropertyTypeController::class, 'index'])->name('admin.propertytype');
    Route::get('/admin/propertytype/create', [PropertyTypeController::class, 'create'])->name('admin.propertytype.create');
    Route::post('/admin/propertytype/create', [PropertyTypeController::class, 'store'])->name('admin.propertytype.store');
    Route::get('/admin/propertytype/edit/{id}', [PropertyTypeController::class, 'edit'])->name('admin.propertytype.edit');
    Route::post('/admin/propertytype/update', [PropertyTypeController::class, 'update'])->name('admin.propertytype.update');
    Route::get('/admin/propertytype/delete/{id}', [PropertyTypeController::class, 'delete'])->name('admin.propertytype.delete');
});

Route::middleware('auth', 'role:agent')->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
});