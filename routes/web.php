<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\UploadController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view("/","index");

Route::post("/upload",[UploadController::class,"upload"])->name("uploadfile");

Route::get("/download",function(){
    return view("download");
});
Route::get("/download",[DownloadController::class,"downloadFile"])->name("dn");
