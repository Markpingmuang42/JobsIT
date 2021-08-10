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

// ================ nav bar ===============
Route::get('/', function () {
    return view('index');
});

Route::get('jobs/jobsIndex', function () {
    return view('jobs/jobsIndex');
})->name('jobsIndex');

Route::get('jobs/jobsSearch', function () {
    return view('jobs/jobsSearch');
})->name('jobsSearch');

Route::get('jobs/map', function () {
    return view('jobs/map');
})->name('map');

Route::get('jobs/myJobs', function () {
    return view('jobs/myJobs');
});

Route::get('jobs/jobsDetail', function () {
    return view('jobs/jobsDetail');
});
Route::get('jobs/history', function () {
    return view('jobs/history');
});

Route::get('jobs/testNoti', function () {
    return view('jobs/testNoti');
});
// ============ jobs detail ===========
Route::get('jobs/allJobs', function () {
    return view('jobs/allJobs');
})->name('allJobs');

Route::get('jobs/interestedJobs', function () {
    return view('jobs/interestedJobs');
})->name('interestedJobs');

Route::get('jobs/applyJobs', function () {
    return view('jobs/applyJobs');
})->name('applyJobs');

Route::get('jobs/historyCompanyJobs', function () {
    return view('jobs/historyCompanyJobs');
})->name('historyCompanyJobs');

// ============ lonin ===========
Route::get('login/index', function () {
    return view('login/index');
})->name('index');

// ============ register ===========
Route::get('login/Register-appl', function () {
    return view('login/Register-appl');
})->name('Register-appl');

Route::get('login/Register-job', function () {
    return view('login/Register-job');
})->name('Register-job');

// ============ Entrep ===========
Route::get('Entrepreneur/entMaster', function () {
    return view('Entrepreneur/entMaster');
})->name('entMaster');

Route::get('Entrepreneur/indexEntrepreneur', function () {
    return view('Entrepreneur/indexEntrepreneur');
})->name('indexEntrepreneur');

Route::get('Entrepreneur/entIndex', function () {
    return view('Entrepreneur/entIndex');
})->name('entIndex');

Route::get('Entrepreneur/entProfile', function () {
    return view('Entrepreneur/entProfile');
})->name('entProfile');

Route::get('Entrepreneur/entCheck', function () {
    return view('Entrepreneur/entCheck');
})->name('entCheck');

Route::get('jobs/mapData', function () {
    return view('jobs/mapData');
})->name('mapData');

Route::get('login/me/Bar', function () {
    return view('login/me/Bar');
})->name('Bar');

Route::resource('PostCompa','EntController');