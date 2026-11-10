<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\EmployeController;

Route::get('/listerEmployes', [EmployeController::class, 'listEmployes']);
