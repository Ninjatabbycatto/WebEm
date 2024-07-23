<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkplacesController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\NotesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workplace/Employees', [TeamsController::class, 'index'])->name('workplace.Employees');
Route::get('/workplace/employees/{id}', [TeamsController::class, 'show'])->name('workplace.employee.profile');
Route::get('/workplace/Workplace', [WorkplacesController::class, 'workplace'])->name('workplace.Workplace');
//Route::get('/workplace/Workplace/[id', [WorkplacesController::class, 'workplace'])->name('workplace.Workplace');
Route::get('/workplace/Calendar', [WorkplacesController::class, 'calendar'])->name('workplace.Calendar');
Route::get('/workplace/Notes', [NotesController::class, 'index'])->name('workplace.Notes');
Route::get('/workplace/notes/{notePrev?}', [NotesController::class, 'show'])->name('workplace.Notes.show');



Route::get('/workplace/Bulletin', [WorkplacesController::class, 'bulletin'])->name('workplace.Bulletin');

Route::resource('workplace', WorkplacesController::class);

