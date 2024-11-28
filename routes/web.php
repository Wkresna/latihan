<?php

use App\Http\Controllers\Admin\GeneralController;
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
    menyambungkan ke admin.php
*/
require_once('admin.php');
//group fungsinya sem uaa function
Route::controller(GeneralController::class)->group(function(){
    route::get('/','about'); //memanggil function index pada gerneral controller
    route::get('/education','education'); //memanggil function about pada gerneral controller --> tanda / tidak boleh kembar, shg yang brtkutnya ditambah kata about
    route::get('/experience','experience'); //memanggil function about pada gerneral controller --> tanda / tidak boleh kembar, shg yang brtkutnya ditambah kata about
    route::get('/awards','awards'); //memanggil function about pada gerneral controller --> tanda / tidak boleh kembar, shg yang brtkutnya ditambah kata about
    route::get('/skills','skills'); //memanggil function about pada gerneral controller --> tanda / tidak boleh kembar, shg yang brtkutnya ditambah kata about
    route::get('/interest','interest'); //memanggil function about pada gerneral controller --> tanda / tidak boleh kembar, shg yang brtkutnya ditambah kata about
});

