<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\permsrolesController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BODMembersController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\TendersController;
use App\Http\Controllers\Admin\ContactsDirectoryController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about_us/about', [HomeController::class, 'about'])->name('about');
Route::get('/about_us/objectives', [HomeController::class, 'objectives'])->name('objectives');
Route::get('/about_us/bod_members', [HomeController::class, 'bod_members'])->name('bod_members');

Route::get('/schemes', [HomeController::class, 'schemes'])->name('schemes');
Route::get('/schemes/gcs', [HomeController::class, 'gcs'])->name('gcs');
Route::get('/schemes/ess', [HomeController::class, 'ess'])->name('ess');
Route::get('/schemes/nsi', [HomeController::class, 'nsi'])->name('nsi');

Route::get('/media/social_media', [HomeController::class, 'social_media'])->name('social_media');
Route::get('/media/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/media/news_and_updates', [HomeController::class, 'news_and_updates'])->name('news_and_updates');
Route::get('/media/news_detail/{slug}', [HomeController::class, 'news_detail'])->name('news_detail')->where('slug', '[a-zA-Z0-9-]+');

Route::get('/downloads/tender', [HomeController::class, 'tender'])->name('tender');
Route::get('/contact_us', [HomeController::class, 'contact_us'])->name('contact_us');
Route::post('/contact_us', [HomeController::class, 'insertcontact'])->name('contact_us.insert');

Route::get('/nfe', [HomeController::class, 'nfe'])->name('nfe');

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

    Route::get('/admin/services/list', [ServicesController::class, 'list'])->name('services.list');
    Route::get('/admin/services/add', [ServicesController::class, 'add'])->name('services.add');
    Route::post('/admin/services/add', [ServicesController::class, 'insert'])->name('services.insert');
    Route::get('/admin/services/edit/{id}', [ServicesController::class, 'edit'])->name('services.edit');
    Route::post('/admin/services/edit/{id}', [ServicesController::class, 'update'])->name('services.update');
    Route::get('/admin/services/delete/{id}', [ServicesController::class, 'delete'])->name('services.delete');

    Route::get('/admin/news/list', [NewsController::class, 'list'])->name('news.list');
    Route::get('/admin/news/add', [NewsController::class, 'add'])->name('news.add');
    Route::post('/admin/news/add', [NewsController::class, 'insert'])->name('news.insert');
    Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('/admin/news/edit/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('/admin/news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');

    Route::get('/admin/messages/list', [MessagesController::class, 'list'])->name('messages.list');
    Route::get('/admin/messages/add', [MessagesController::class, 'add'])->name('messages.add');
    Route::post('/admin/messages/add', [MessagesController::class, 'insert'])->name('messages.insert');
    Route::get('/admin/messages/edit/{id}', [MessagesController::class, 'edit'])->name('messages.edit');
    Route::post('/admin/messages/edit/{id}', [MessagesController::class, 'update'])->name('messages.update');
    Route::get('/admin/messages/delete/{id}', [MessagesController::class, 'delete'])->name('messages.delete');

    Route::get('/admin/tenders/list/{type?}', [TendersController::class, 'list'])->name('tenders.list')->where('type', '[0-9]+');
    Route::get('/admin/tenders/add/{type?}', [TendersController::class, 'add'])->name('tenders.add')->where('type', '[0-9]+');
    Route::post('/admin/tenders/insert', [TendersController::class, 'insert'])->name('tenders.insert');
    Route::get('/admin/tenders/edit/{id}', [TendersController::class, 'edit'])->name('tenders.edit');
    Route::post('/admin/tenders/edit/{id}', [TendersController::class, 'update'])->name('tenders.update');
    Route::get('/admin/tenders/delete/{id}', [TendersController::class, 'delete'])->name('tenders.delete');

    Route::get('/admin/contacts_directory/list', [ContactsDirectoryController::class, 'list'])->name('contacts_directory.list');
    Route::get('/admin/contacts_directory/add', [ContactsDirectoryController::class, 'add'])->name('contacts_directory.add');
    Route::post('/admin/contacts_directory/add', [ContactsDirectoryController::class, 'insert'])->name('contacts_directory.insert');
    Route::get('/admin/contacts_directory/edit/{id}', [ContactsDirectoryController::class, 'edit'])->name('contacts_directory.edit');
    Route::post('/admin/contacts_directory/edit/{id}', [ContactsDirectoryController::class, 'update'])->name('contacts_directory.update');
    Route::get('/admin/contacts_directory/delete/{id}', [ContactsDirectoryController::class, 'delete'])->name('contacts_directory.delete');

    Route::get('/admin/contact_us/list', [ContactUsController::class, 'list'])->name('contact_us.list');
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

