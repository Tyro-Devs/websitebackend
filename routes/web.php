<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FAQAccordionController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('website');
Route::get('/portfolio/{id}', [App\Http\Controllers\FrontController::class, 'portfolio'])->name('portfolio');
Route::post('/send-mail', [MessageController::class,'sendMail'])->name('sendMail');
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('top-sections', TopSectionController::class);
    Route::resource('tool', ToolController::class);
    Route::resource('about-us', AboutUsController::class);
    Route::resource('why-us', WhyUsController::class);
    Route::resource('why-us-accordions', WhyUsAccordionController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('service-detali', ServiceDetailController::class);
    Route::resource('type', TypeController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('footer', FooterController::class);
    Route::resource('team-member', TeamMemberController::class);
    Route::resource('faq', FAQController::class);
    Route::resource('faq-acc', FAQAccordionController::class);

    });

Route::post('message', [MessageController::class,'store']);
