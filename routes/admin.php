<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Backoffice\SchoolController;
use App\Http\Controllers\Backoffice\EducationController;
use App\Models\Education;
use App\Models\School;
use Illuminate\Support\Facades\Route;

//routes  backoffice
//1. routes untuk login backoffice
Route::middleware(['guest'])->controller(LoginController::class)->name('auth.')->prefix('auth')->group(function(){
    route::get('/', 'index') ->name('index');
    route::post('/login', 'login') ->name('login');
});

//2. route untuk school dan educataion dll
Route::middleware(['auth:web'])->prefix('admin')->name('admin.')->group(function () {
    //2a. route untuk school
    Route::controller(SchoolController::class)->prefix('school')->name('school.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit'); // Memanggil dari controller School
        Route::put('/{id}/update', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
    });
    //1.b. route logout
    Route::controller(LoginController::class)->name('auth.')->prefix('auth')->group(function(){
        route::get('/logout', 'logout') ->name('logout');
    });


//3. untuk edication
    Route::controller(EducationController::class)->prefix('education')->name('education.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit'); // Memanggil dari controller Education
        Route::put('/{id}/update', 'update')->name('update');
        Route::delete('/{id}/destroy', 'destroy')->name('destroy');
    });

        Route::prefix('education')->name('education.')->group(function () {
            Route::get('/create', [EducationController::class, 'create'])->name('create'); // Menampilkan form
            Route::post('/store', [EducationController::class, 'store'])->name('store');  // Menyimpan data
        });

    
    //route delete di school krn pakai jqAjax gg perlu lagi. dia akan baca route di atas
     Route::delete('admin/education/{id}', [EducationController::class, 'destroy'])->name('admin.education.destroy');

});
