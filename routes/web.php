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



Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/about', [App\Http\Controllers\WelcomeController::class, 'about'])->name('welcome.about');
Route::get('/history', [App\Http\Controllers\WelcomeController::class, 'history'])->name('welcome.history');
Route::get('/team', [App\Http\Controllers\WelcomeController::class, 'team'])->name('welcome.team');
Route::get('/school-of-post-graduate-studies', [App\Http\Controllers\WelcomeController::class, 'sopgs'])->name('welcome.sopgs');
Route::get('/school-of-ministry', [App\Http\Controllers\WelcomeController::class, 'som'])->name('welcome.som');
Route::get('/school-courses/{slug}', [App\Http\Controllers\WelcomeController::class, 'somCourse'])->name('welcome.single.course');
Route::get('/contact', [App\Http\Controllers\WelcomeController::class, 'contact'])->name('welcome.contact');



Route::prefix('home')->group(function () {  
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('dashboard', [App\Http\Controllers\HomeController::class,'dashboard'])->name('home.dashboard');
    Route::get('application/{course}', [App\Http\Controllers\HomeController::class,'Application'])->name('home.application');
    Route::get('payment/{course}', [App\Http\Controllers\HomeController::class,'coursePayment'])->name('home.course.payment');
    Route::get('applications', [App\Http\Controllers\HomeController::class,'Applications'])->name('home.applications');
    Route::get('profile', [App\Http\Controllers\HomeController::class,'profile'])->name('home.profile');
    Route::put('profile', [App\Http\Controllers\HomeController::class,'updateProfile'])->name('home.update.profile');
    Route::post('apply', [App\Http\Controllers\HomeController::class,'apply'])->name('home.apply');
    Route::get('courses', [App\Http\Controllers\HomeController::class, 'courses'])->name('home.courses');
    Route::get('payments', [App\Http\Controllers\HomeController::class,'payments'])->name('home.payments');
});


Route::prefix('admin')->group(function () {  
    Route::get('show-details/{profile}', [App\Http\Controllers\AdminController::class,'showDetails'])->name('admin.show.details');
    Route::get('schools', [App\Http\Controllers\AdminController::class,'schools'])->name('admin.schools');
    Route::get('users', [App\Http\Controllers\AdminController::class,'users'])->name('admin.users');
    Route::get('settings', [App\Http\Controllers\AdminController::class,'settings'])->name('admin.settings');
    Route::get('payments', [App\Http\Controllers\AdminController::class,'payments'])->name('admin.payments');
    Route::get('applications', [App\Http\Controllers\AdminController::class,'Applications'])->name('admin.applications');
    Route::get('acceptance/{transaction}', [App\Http\Controllers\AdminController::class,'acceptance'])->name('admin.acceptance');
    Route::post('acceptance/{transaction}', [App\Http\Controllers\AdminController::class,'postAcceptance'])->name('post.admin.acceptance');
});

Route::prefix('super-admin')->group(function () {  
    Route::get('settings', [App\Http\Controllers\SuperAdminController::class,'settings'])->name('super-admin.settings');
    Route::get('settings/{setting}', [App\Http\Controllers\SuperAdminController::class,'settingForm'])->name('super-admin.settings.form');
    Route::post('settings/form', [App\Http\Controllers\SuperAdminController::class,'settingFormPost'])->name('super-admin.settings.post.form');
});





Route::resource('mailinglist', App\Http\Controllers\MailinglistController::class);
Route::get('mailinglist/{mailinglist}/delete', [App\Http\Controllers\MailinglistController::class,'delete'])->name('mailinglist.delete');
Route::post('/application-payment', [App\Http\Controllers\PaystackController::class,'goToGateway'])->name('ps.post.dp');
Route::post('/webhook', [App\Http\Controllers\PaystackController::class,'webHook'])->name('ps.webhook');
Route::get('/payment/callback/', [App\Http\Controllers\PaystackController::class,'handleGatewayCallback'])->name('ps.callback');
