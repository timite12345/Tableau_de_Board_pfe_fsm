<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Middleware;


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
    return view('Login_V');
});

Route::get('/RegisterPage', function () {
    return view('RegisterPage');
});

Route::get('/FormEmploy', function () {
    return view('FormEmploy');
});

Route::post('/Login_V',[Controller::class, "Login"])->name('connectUser');
Route::post('/RegisterPage',[Controller::class, "Create"])->name('createUser');
Route::post('/FormEmploy',[Controller::class, "CreateHopital"])->name('createEtbSante');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/widgets', function () {
    return view('widgets');
});

Route::get('/Register_V', function () {
    return view('Register_V');
});

Route::get('/AjouterMission', function () {
    return view('AjouterMission');
});

Route::post('/NewMission',[Controller::class, "NewMission"])->name('saveInfo');


Route::get('/HistoriqueMission', function () {
    return view('HistoriqueMission');
});

Route::get('/NewMission', function () {
    return view('NewMission');
});

