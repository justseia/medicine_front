<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', App\Http\Controllers\Main\IndexController::class)->name('home.index');
Route::get('/appointment', App\Http\Controllers\Main\AppointmentController::class)->name('appointment.index');
Route::get('/our-doctors', App\Http\Controllers\Doctor\IndexController::class)->name('doctor.index');
Route::get('/our-doctors/{doctor}', App\Http\Controllers\Doctor\ShowController::class)->name('doctor.show');
Route::get('/about', App\Http\Controllers\About\IndexController::class)->name('about.index');
Route::get('/prices', App\Http\Controllers\Price\IndexController::class)->name('price.index');
Route::get('/news', App\Http\Controllers\News\IndexController::class)->name('news.index');
Route::get('/news/{news}', App\Http\Controllers\News\IndexController::class)->name('news.show');
Route::get('/news/{news}', App\Http\Controllers\News\ShowController::class)->name('news.show');
Route::get('/contact', App\Http\Controllers\Contact\IndexController::class)->name('contact.index');
Route::get('/services', App\Http\Controllers\Service\IndexController::class)->name('service.index');
Route::get('/services/{service}', App\Http\Controllers\Service\ShowController::class)->name('service.show');
Route::post('/services/{service}', App\Http\Controllers\Service\StoreController::class)->name('service.store');
Route::get('/time/{user}', App\Http\Controllers\Main\TimeController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', App\Http\Controllers\Main\ProfileController::class)->name('profile.index');
    Route::delete('/profile/{order}', App\Http\Controllers\Main\ProfileDeleteController::class)->name('profile.delete');
    Route::post('/profile/filter', App\Http\Controllers\Main\ProfileFilterController::class)->name('profile.filter');
    Route::post('/profile', App\Http\Controllers\Main\ProfileUpdateController::class)->name('profile.update');
    Route::get('/admin/patient-profile/{user}', App\Http\Controllers\Admin\Main\UserProfileController::class)->name('admin.user.profile');
    Route::post('/admin/patient-profile/{user}', App\Http\Controllers\Admin\Main\UserProfileSaveController::class)->name('admin.user.profile.save');
    Route::get('/admin/dashboard', App\Http\Controllers\Admin\Main\IndexController::class)->name('admin.index');
    Route::get('/admin/doctors', App\Http\Controllers\Admin\Main\DoctorController::class)->name('admin.doctors');
    Route::get('/admin/doctors/add', App\Http\Controllers\Admin\Main\DoctorCreateController::class)->name('admin.doctors.create');
    Route::post('/admin/doctors/add', App\Http\Controllers\Admin\Main\DoctorStoreController::class)->name('admin.doctors.store');
    Route::get('/admin/doctors/{doctor}', App\Http\Controllers\Admin\Main\DoctorEditController::class)->name('admin.doctors.edit');
    Route::post('/admin/doctors/{doctor}', App\Http\Controllers\Admin\Main\DoctorUpdateController::class)->name('admin.doctors.update');
    Route::get('/admin/users', App\Http\Controllers\Admin\Main\UserController::class)->name('admin.users');
    Route::get('/admin/news', App\Http\Controllers\Admin\Main\NewsController::class)->name('admin.news');
    Route::get('/admin/news/add', App\Http\Controllers\Admin\Main\NewsCreateController::class)->name('admin.news.create');
    Route::post('/admin/news/add', App\Http\Controllers\Admin\Main\NewsStoreController::class)->name('admin.news.store');
    Route::get('/admin/news/{news}', App\Http\Controllers\Admin\Main\NewsEditController::class)->name('admin.news.edit');
    Route::post('/admin/news/{news}', App\Http\Controllers\Admin\Main\NewsUpdateController::class)->name('admin.news.update');
    Route::get('/admin/price', App\Http\Controllers\Admin\Main\PriceController::class)->name('admin.price');
    Route::post('/doctor/order', App\Http\Controllers\Doctor\OrderController::class)->name('doctor.order');
});
