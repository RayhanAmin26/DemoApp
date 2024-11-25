<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',[AboutController::class,'about']);
Route::get('/about/me',[AboutController::class,'aboutMe']);
Route::get('/download',[FileController::class,'download']);
Route::get('/download/invoice/{invoiceID}',[FileController::class,'downloadInvoice']);
Route::get('/download/invoice/{invoiceID}/type/{fileType?}',[FileController::class,'downloadInvoice']);
Route::get('/download/invoice',[FileController::class,'error']);
// Route::get('/download/invoice/{invoiceID}/type/{fileType}',[FileController::class,'downloadInvoiceWithType']);

Route::get('/invoice/{invoiceID}',[InvoiceController::class,'invoice']);

Route::get('/tasks}',[TaskController::class,'index']);
