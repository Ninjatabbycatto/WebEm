<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WorkplacesController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\objectivesController;

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect('/', 'workplace')->name('dashboard');

route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/workplace/Employees', [TeamsController::class, 'index'])->name('workplace.Employees');
    Route::get('/workplace/employees/{id}', [TeamsController::class, 'show'])->name('workplace.employee.profile');
    Route::get('/workplace/Workplace', [WorkplacesController::class, 'workplace'])->name('workplace.Workplace');
    //Route::get('/workplace/Workplace/[id', [WorkplacesController::class, 'workplace'])->name('workplace.Workplace');
    Route::get('/workplace/Calendar', [WorkplacesController::class, 'calendar'])->name('workplace.Calendar');
    Route::get('/workplace/Notes', [NotesController::class, 'index'])->name('workplace.Notes');
    Route::get('/workplace/notes/preview/{notePrev?}', [NotesController::class, 'show'])->name('workplace.Notes.show');
    Route::get('/workplace/notes/create', [NotesController::class, 'create'])->name('workplace.Notes.create');
    Route::post('/workplace/notes', [NotesController::class, 'store'])->name('workplace.Notes.store');
    Route::delete('/workplace/notes/preview/{id?}', [NotesController::class, 'destroy'])->name('workplace.Notes.delete');
    Route::put('/workplace/notes/preview/{id?}', [NotesController::class, 'update'])->name('workplace.Notes.update');


    Route::get('/workplace/Bulletin', [WorkplacesController::class, 'bulletin'])->name('workplace.Bulletin');

    Route::resource('workplace', WorkplacesController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
