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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/vaccine', function () {
    return view('vaccine.vaccine', [
        "title" => "Vaccine",
    ]);
});

Route::get('/insert-vaccine', function () {
    return view('vaccine.insert_vaccine', [
        "title" => "Vaccine",
    ]);
});

Route::get('/edit-vaccine', function () {
    return view('vaccine.edit_vaccine', [
        "title" => "Vaccine",
    ]);
});

Route::get('/patient', function () {
    return view('patient.patient', [
        "title" => "Patient",
    ]);
});

Route::get('/list-vaccine', function () {
    return view('patient.list', [
        "title" => "Patient",
    ]);
});

Route::get('/insert-patient', function () {
    return view('patient.insert_patient', [
        "title" => "Patient",
    ]);
});

Route::get('/edit-patient', function () {
    return view('patient.edit_patient', [
        "title" => "Patient",
    ]);
});
