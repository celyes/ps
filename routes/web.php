<?php

use App\Http\Controllers\VulnerabilityController as VulnerabilityWebController;
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

Route::view('/', 'vulnerabilities.home')->name('vulns.index');

Route::group(['prefix' => 'vulnerabilities', 'as' => 'vulns.'], function () {
    Route::get('/{id}', [VulnerabilityWebController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('show');

    Route::get('/{id}/edit', [VulnerabilityWebController::class, 'edit'])
    ->where('id', '[0-9]+')
    ->name('edit');

    Route::view('/create', 'vulnerabilities.create')->name('create');
});
