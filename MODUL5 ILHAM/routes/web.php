<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\VaccineController;
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

Route::prefix('vaccine')->group(function(){

    // views method
    Route::get('/', [VaccineController::class, 'index'])->name('vaccine.home-view');
    Route::get('/add', [VaccineController::class, 'add_index'])->name('vaccine.add-view');
    Route::get('/edit/{vaccine}', [VaccineController::class, 'edit_index'])->name('vaccine.edit-view');

    // CRUD METHOD
    Route::post('/add', [VaccineController::class, 'store'])->name('vaccine.post');
    Route::post('/update/{vaccine}', [VaccineController::class, 'update'])->name('vaccine.update');
    Route::get('/delete/{vaccine}', [VaccineController::class, 'destroy'])->name('vaccine.delete');

});

Route::prefix('patient')->group(function(){
    // view method
    Route::get('/', [PatientController::class, 'index'])->name('patient.home-view');
    Route::get('/vaccines', [PatientController::class, 'vaccine_index'])->name('patient.vaccine-view');
    Route::get('/vaccines/{vaccine}/register', [PatientController::class, 'register_index'])->name('patient.register-view');
    Route::get('/edit/{patient}', [PatientController::class, 'edit_index'])->name('patient.edit-view');

    Route::post('/add', [PatientController::class, 'store'])->name('patient.store');
    Route::post('/update/{patient}', [PatientController::class, 'update'])->name('patient.update');
    Route::get('/delete/{patient}', [PatientController::class, 'destroy'])->name('patient.destroy');
});

