<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use RealRashid\SweetAlert\Facades\Alert;

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
    Alert::success('Hola');
    return view('welcome');
   

});
Route::resource('projects', ProjectController::class);
