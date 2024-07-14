<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkplacesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workplace/Employees', [WorkplacesController::class, 'employees'])->name('workplace.Employees');
Route::get('/workplace/Workplace', [WorkplacesController::class, 'workplace'])->name('workplace.Workplace');
Route::get('/workplace/Calendar', [WorkplacesController::class, 'calendar'])->name('workplace.Calendar');
Route::get('/workplace/Notes', [WorkplacesController::class, 'notes'])->name('workplace.Notes');
Route::get('/workplace/Bulletin', [WorkplacesController::class, 'bulletin'])->name('workplace.Bulletin');

Route::resource('workplace', WorkplacesController::class);

