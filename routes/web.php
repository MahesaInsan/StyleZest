<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Custom;

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

/* Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/adminhome')->name('admin.adminhome');
}); */

/* Route::get('/adminhome', function(){return view('admin.adminhome');})->middleware(['auth', 'isAdmin']); */

Route::get('/', function () {
    $custom = Custom::first();
    return view('welcome')->with('custom', $custom);
})->name('welcome');

Auth::routes();
Route::get('/box', function () {
    return view('layouts.box');
});

/* Admin Page -> Clothes section */
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('adminhome')->middleware('isAdmin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/filter/{filter}/{name_filter}', [App\Http\Controllers\HomeController::class, 'filter'])->name('home.filter');

Route::get('/admin/addclothes', [App\Http\Controllers\ClothesController::class, 'addClothes'])->name('addClothes');
Route::post('/admin/addclothes', [App\Http\Controllers\ClothesController::class, 'saveClothes']);

Route::get('/admin/editclothes/{id}', [App\Http\Controllers\ClothesController::class, 'editClothes']);
Route::put('/admin/editclothes/{id}', [App\Http\Controllers\ClothesController::class, 'updateClothes']);

Route::delete('/admin/deleteclothes/{id}', [App\Http\Controllers\ClothesController::class, 'deleteClothes']);


//Account's route
Route::resource('admin/users', UserController::class);
Route::get('admin/edit-profile', [UserController::class, 'edit_profile'])->middleware('auth')->name('admin.edit-profile');
Route::get('admin/edit-password', [UserController::class, 'edit_password'])->middleware('auth')->name('admin.edit-password');

//Size's route
Route::get('/admin/sizeindex', [App\Http\Controllers\HomeController::class, 'showsize']);
Route::get('/admin/addsize', [App\Http\Controllers\SizesController::class, 'addSizes'])->name('addSizes');
Route::post('/admin/addsize', [App\Http\Controllers\SizesController::class, 'saveSizes']);
Route::get('/admin/editsizes/{id}', [App\Http\Controllers\SizesController::class, 'editSizes']);
Route::put('/admin/editsizes/{id}', [App\Http\Controllers\SizesController::class, 'updateSizes']);
Route::delete('/admin/deletesizes/{id}', [App\Http\Controllers\SizesController::class, 'deleteSizes']);

//color's route
Route::get('/admin/color', [App\Http\Controllers\HomeController::class, 'adminColor'])->name('adminColor');
Route::get('/admin/addcolor', [App\Http\Controllers\ColorsController::class, 'addColors'])->name('addColors');
Route::post('/admin/addcolor', [App\Http\Controllers\ColorsController::class, 'saveColors']);
Route::get('/admin/editcolors/{id}', [App\Http\Controllers\ColorsController::class, 'editColors']);
Route::put('/admin/editcolors/{id}', [App\Http\Controllers\ColorsController::class, 'updateColors']);
Route::delete('/admin/deletecolors/{id}', [App\Http\Controllers\ColorsController::class, 'deleteColors']);

//category's route
Route::get('/admin/category', [App\Http\Controllers\HomeController::class, 'adminCategory'])->name('adminCategory');
Route::get('/admin/addcategory', [App\Http\Controllers\CategoriesController::class, 'addCategories'])->name('addCategories');
Route::post('/admin/addcategory', [App\Http\Controllers\CategoriesController::class, 'saveCategories']);
Route::get('/admin/editcategories/{id}', [App\Http\Controllers\CategoriesController::class, 'editCategories']);
Route::put('/admin/editcategories/{id}', [App\Http\Controllers\CategoriesController::class, 'updateCategories']);
Route::delete('/admin/deletecategories/{id}', [App\Http\Controllers\CategoriesController::class, 'deleteCategories']);

//gender's route
Route::get('/admin/gender', [App\Http\Controllers\HomeController::class, 'adminGender'])->name('adminGender');
Route::get('/admin/addgender', [App\Http\Controllers\GendersController::class, 'addGenders'])->name('addGenders');
Route::post('/admin/addgender', [App\Http\Controllers\GendersController::class, 'saveGenders']);
Route::get('/admin/editgenders/{id}', [App\Http\Controllers\GendersController::class, 'editGenders']);
Route::put('/admin/editgenders/{id}', [App\Http\Controllers\GendersController::class, 'updateGenders']);
Route::delete('/admin/deletegenders/{id}', [App\Http\Controllers\GendersController::class, 'deleteGenders']);

//web customization's route
Route::get('/admin/customizeweb', [App\Http\Controllers\HomeController::class, 'adminCustomizeweb'])->name('adminCustomizeweb');
Route::get('/admin/editcustomizeweb/{id}', [App\Http\Controllers\CustomsController::class, 'editCustoms']);
Route::put('/admin/editcustomizeweb/{id}', [App\Http\Controllers\CustomsController::class, 'updateCustoms']);

/* User Page -> Buy section */
Route::get('/buyclothes/{id}', [App\Http\Controllers\ClothesController::class, 'buyClothes']);
Route::post('/buyclothes/{id}', [App\Http\Controllers\ProductController::class, 'addtoCart']);


Route::get('/products', [ProductController::class, 'index_product'])->name('products.index');

