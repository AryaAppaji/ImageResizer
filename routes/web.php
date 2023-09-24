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

Route::post("/",[UploadController::class,"upload"])->name("uploadfile");

Route::view("/getFile","download")->name("download");

Route::get("/getFile",[DownloadController::class,"downloadFile"])->name("downloadfile");
