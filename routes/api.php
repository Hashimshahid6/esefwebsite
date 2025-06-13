<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ReactApi;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/all_banners', [ReactApi::class, 'all_banners']);
Route::get('/home_news', [ReactApi::class, 'home_news']);
Route::get('/messages', [ReactApi::class, 'messages']);
Route::get('/home_schemes', [ReactApi::class, 'home_schemes']);
Route::get('/all_news', [ReactApi::class, 'all_news']);
Route::get('/gallery', [ReactApi::class, 'gallery']);
Route::get('/nfe', [ReactApi::class, 'nfe']);
Route::get('/tenders', [ReactApi::class, 'tenders']);
Route::get('/news_detail/{slug}', [ReactApi::class, 'news_detail'])->where('slug', '[a-zA-Z0-9-]+');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
