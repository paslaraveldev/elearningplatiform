<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunicationWritingSkillsController;
use App\Http\Controllers\CProgrammingController;
use App\Http\Controllers\CourseController;

use App\Http\Controllers\PoliticalEconomyController;
use App\Http\Controllers\HomeController;

;



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
// backend
Route::resource('communication', CommunicationWritingSkillsController::class);
Route::resource('cprogramming', CProgrammingController::class);
Route::resource('political', PoliticalEconomyController::class);
// frontend

Route::resource('courses', CourseController::class);
Route::get('/communicationskills', [HomeController::class, 'getcommunicationwritingskills'])->name('communicationskills');
Route::get('/cprograming', [HomeController::class, 'getcprogramming'])->name('cprograming');
Route::get('/politicaleconomy', [HomeController::class, 'getpolitical'])->name('pe');


Route::get('/course', [HomeController::class, 'getcourse'])->name('course');


Route::get('/aboutus', [HomeController::class, 'about'])->name('aboutus');




Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
