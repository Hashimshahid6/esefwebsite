<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\permsrolesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BODMembersController;
use App\Http\Controllers\GalleryController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/admin/list', [AdminController::class, 'list'])->name('admin.list');
    Route::get('/admin/admin/add', [AdminController::class, 'add'])->name('admin.add');
    Route::post('/admin/admin/add', [AdminController::class, 'insert'])->name('admin.insert');
    Route::get('/admin/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/admin/edit/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('/admin/admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

    Route::get('/admin/banners/list', [BannerController::class, 'list'])->name('banners.list');
    Route::get('/admin/banners/add', [BannerController::class, 'add'])->name('banners.add');
    Route::post('/admin/banners/add', [BannerController::class, 'insert'])->name('banners.insert');
    Route::get('/admin/banners/edit/{id}', [BannerController::class, 'edit'])->name('banners.edit');
    Route::post('/admin/banners/edit/{id}', [BannerController::class, 'update'])->name('banners.update');
    Route::get('/admin/banners/delete/{id}', [BannerController::class, 'delete'])->name('banners.delete');

    Route::get('/admin/sliders/list', [SlidersController::class, 'list'])->name('sliders.list');
    Route::get('/admin/sliders/add', [SlidersController::class, 'add'])->name('sliders.add');
    Route::post('/admin/sliders/add', [SlidersController::class, 'insert'])->name('sliders.insert');
    Route::get('/admin/sliders/edit/{id}', [SlidersController::class, 'edit'])->name('sliders.edit');
    Route::post('/admin/sliders/edit/{id}', [SlidersController::class, 'update'])->name('sliders.update');
    Route::get('/admin/sliders/delete/{id}', [SlidersController::class, 'delete'])->name('sliders.delete');

    Route::get('/admin/bodmembers/list', [BODMembersController::class, 'list'])->name('bodmembers.list');
    Route::get('/admin/bodmembers/add', [BODMembersController::class, 'add'])->name('bodmembers.add');
    Route::post('/admin/bodmembers/add', [BODMembersController::class, 'insert'])->name('bodmembers.insert');
    Route::get('/admin/bodmembers/edit/{id}', [BODMembersController::class, 'edit'])->name('bodmembers.edit');
    Route::post('/admin/bodmembers/edit/{id}', [BODMembersController::class, 'update'])->name('bodmembers.update');
    Route::get('/admin/bodmembers/delete/{id}', [BODMembersController::class, 'delete'])->name('bodmembers.delete');

    Route::get('/admin/gallery/list', [GalleryController::class, 'list'])->name('gallery.list');
    Route::get('/admin/gallery/add', [GalleryController::class, 'add'])->name('gallery.add');
    Route::post('/admin/gallery/add', [GalleryController::class, 'insert'])->name('gallery.insert');
    Route::get('/admin/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/admin/gallery/edit/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::get('/admin/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');
});

Route::prefix('perms_roles')->group(function () {
    Route::get('/new_role/{name}', [permsrolesController::class, 'create_new_role'])->where('name', '[a-zA-Z ]+');
    Route::get('/new_permission/{name}', [permsrolesController::class, 'create_new_permission'])->where('name', '[a-zA-Z ]+');
    Route::get('/perm_to_role/{perm_name}/{role_name}', [permsrolesController::class, 'assign_perm_to_role'])->where(['perm_name', '[a-zA-Z ]+'], ['role_name', '[a-zA-Z ]+']);
    Route::get('/role_to_user/{role_name}/{user_id}', [permsrolesController::class, 'assign_role_to_user'])->where(['role_name', '[a-zA-Z ]+'], ['user_id', '[0-9]+']);
    Route::get('/revoke_permission_from_role/{role_name}/{permission_name}', [permsrolesController::class, 'revoke_permission_from_role'])->where(['role_name', '[a-zA-Z ]+'], ['permission_name', '[a-zA-Z ]+']);
    Route::get('/revoke_role_from_user/{role_name}/{user_id}', [permsrolesController::class, 'remove_role_from_user'])->where(['role_name', '[a-zA-Z ]+'], ['user_id', '[0-9]+']);
    Route::get('/view_role_perms/{role_name}', [permsrolesController::class, 'view_role_perms'])->where(['role_name', '[a-zA-Z ]+']);
});

