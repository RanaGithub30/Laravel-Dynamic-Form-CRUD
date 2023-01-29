<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

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
    return view('home');
})->name('/');

Route::get('registration', [RegistrationController::Class, 'registration'])->name('registration');
Route::post('post-registration', [RegistrationController::Class, 'post_registration'])->name('post-registration');
Route::get('view-user-lists', [RegistrationController::Class, 'view_user_lists'])->name('view-user-lists');