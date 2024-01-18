<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoterController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(VoterController::class)->prefix('Voters')->group(function () {
        Route::get('', 'index')->name('Voters');
        Route::get('create', 'create')->name('Voters.create');
        Route::post('store', 'store')->name('Voters.store');
        Route::get('show/{id}', 'show')->name('Voters.show');
        Route::get('edit/{id}', 'edit')->name('Voters.edit');
        Route::put('edit/{id}', 'update')->name('Voters.update');
        Route::delete('destroy/{id}', 'destroy')->name('Voters.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});