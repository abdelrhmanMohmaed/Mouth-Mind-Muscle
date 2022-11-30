<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KcalController;
use App\Http\Controllers\MacroController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PortionController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::controller(MacroController::class)->name('macro.')
        ->group(
            function () {

                Route::get('macro/distribution', 'index')->name('index');
                Route::post('macro/store', 'store')->name('store');
                Route::post('macro/update', 'update')->name('update');
                Route::get('macro/delete', 'delete')->name('delete');
            }
        );

    Route::controller(PatientController::class)->name('patient.')
        ->group(function () {


            Route::get('patient', 'index')->name('index');
            Route::get('patient/details', 'create')->name('details');
            Route::post('patient/store', 'store')->name('store');
            Route::get('get/ageRange/{id}', 'ageRange')->name('ageRange');
        });



    Route::controller(KcalController::class)->name('kcal.')
        ->group(function () {

            Route::get('kcal/{slug}', 'index')->name('index');
            Route::post('kcal/store', 'store')->name('store');

            Route::get('kcal/edit/{slug}', 'edit')->name('edit');
            Route::post('kcal/update', 'update')->name('update');
        });

    Route::controller(PortionController::class)->name('portion.')
        ->group(function () {

            Route::get('portion/{slug}', 'portion')->name('index');
        });

    Route::controller(ScheduleController::class)->name('schedule.')
        ->group(function () {

            Route::get('schedule', 'index')->name('index');
            Route::post('schedule/store', 'store')->name('store');
            Route::get('schedule/edit/{slug}', 'edit')->name('edit');
            Route::POST('schedule/update', 'update')->name('update');
        });


    Route::controller(TestController::class)
        ->group(function () {

            Route::get('test', 'index')->name('test');
        });
});




Route::get('/clear/c', function () {
    Artisan::call('cache:clear');
    echo '<script>alert("cache clear Success")</script>';
});

Route::get('/clear/o', function () {
    Artisan::call('optimize:clear');
    echo '<script>alert("o Success")</script>';
});
Route::get('/m', function () {
    Artisan::call('migrate');
    echo '<script>alert("migrate Success")</script>';
});
Route::get('/s', function () {
    Artisan::call('db:seed');
    echo '<script>alert("seed Success")</script>';
});
Route::get('/down', function () {
    Artisan::call('down --secret="01123843996"');
    echo '<script>alert("down")</script>';
});
