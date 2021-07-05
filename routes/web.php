<?php

use Illuminate\Support\Facades\Route;
use App\Models\Branche;
use App\Http\Controllers\BrancheController;
use App\Http\Controllers\EmployController;
use App\Http\Controllers\JournalistController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\Branche_magazineController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\Journalist_magazineController;
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

Route::resource('branches','BrancheController');//terminado
Route::resource('employs','EmployController');//terminado
Route::resource('journalists','JournalistController');//terminado
Route::resource('magazines','MagazineController');//terminado
Route::resource('branche_magazines','Branche_magazineController');//terminado
Route::resource('copies','CopyController');//terminado
Route::resource('sections','SectionController');//terminado
Route::resource('journalist_magazines','Journalist_magazineController');//terminado
