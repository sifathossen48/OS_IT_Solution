<?php

use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\company;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PackageController::class, 'home']);


//Route::get('logout', [LogoutController::class, 'destroy'])->name('auth.logout');
Route::get('osTravel/home', [PackageController::class, 'home'])->name('osTravel.home');

//Route::get('/login', function () {
//    return view('auth.login')
//})->name('login');


// Package
//Route::get('packages/create', [PackageController::class, 'create'])->name('packages.create')->middleware('admin');
//Route::post('packages/store', [PackageController::class, 'store'])->name('packages.store')->middleware('admin');
//Route::get('packages/show/{package}', [PackageController::class, 'show'])->name('packages.show');
Route::resource('packages', PackageController::class);
Route::get('inside', [PackageController::class, 'inside'])->name('packages/inside');
Route::get('outside', [PackageController::class, 'outside'])->name('packages/outside');
Route::get('book/{package}', [PackageController::class, 'form'])->name('packages/book');
Route::get('edit/{package}', [PackageController::class, 'editForm'])->name('packages/edit')->middleware('admin');
Route::post('edit/{package_id}',[PackageController::class, 'edit'])->name('packages/post/edit')->middleware('admin');
Route::post('pay/{package_id}',[PackageController::class, 'book'])->name('pay');
Route::post('home/search',[PackageController::class, 'search'])->name('home.search');
Route::post('home/filter',[PackageController::class, 'filter'])->name('home.filter');
Route::get('company/about',[company::class, 'index'])->name('company.about');
//Route::post('home/search', function () {
//    dd("i got the api");
//    return view('auth.login');
//})->name('home.search');

