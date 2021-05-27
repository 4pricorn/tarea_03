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
	//throw new Exception('Something is wrong');
    return view('welcome');
});

use App\Http\Controllers\ContactController;

//Route::get('/contacts', [ContactController::class, 'index']);
//Route::get('/contacts/create', [ContactController::class, 'create']);

Route::resource('contacts', ContactController::class);