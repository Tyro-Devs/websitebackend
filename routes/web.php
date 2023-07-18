<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\TopSectionController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\WhyUsAccordionController;
use App\Http\Controllers\WhyUsController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('top-sections', TopSectionController::class);
Route::resource('tool', ToolController::class);
Route::resource('about-crud', AboutUsController::class);
Route::resource('why-us', WhyUsController::class);
Route::resource('why-us-accordions', WhyUsAccordionController::class);
Route::resource('services', ServiceController::class);
Route::resource('service-detali', ServiceDetailController::class);
Route::resource('type', TypeController::class);
Route::resource('contact', ContactController::class);
Route::resource('foooter', FooterController::class);
Route::resource('team-member', TeamMemberController::class);
Route::resource('faq', FAQController::class);
Route::post('message', [MessageController::class,'store']);

