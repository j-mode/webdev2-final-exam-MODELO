<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Route::get('bible-study-requests', [RequestController::class, 'index']);
//Route::post('bible-study-request-form', [RequestController::class, 'store']);
//Route::get('thank-you', [RequestController::class, 'thank_you']);

Route::get('bible-study-requests', function () {
  return view('bible-study-requests');
});

Route::get('bible-study-request-form', function () {
  return view('bible-study-request-form');
});

Route::get('thank-you', function () {
  return view('thank-you');
});