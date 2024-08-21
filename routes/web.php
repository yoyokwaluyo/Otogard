<?php

use App\Http\Controllers\CarCareController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseCareController;
use App\Http\Controllers\MilestonesController;
use App\Http\Controllers\OurCustomerController;
use App\Http\Controllers\OurFacilityController;
use App\Http\Controllers\PersonalCareController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProductController;
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

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}', 'where' => ['language' => '[a-zA-Z]{2}']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/detail/{slug}', [HomeController::class, 'detail'])->name('home.detail');
    Route::get('/milestones', [MilestonesController::class, 'index'])->name('milestones');
    Route::get('/our-facility', [OurFacilityController::class, 'index'])->name('our_facility');
    Route::get('/faq', [FaqController::class, 'index'])->name('faq');
    Route::get('/our-customer', [OurCustomerController::class, 'index'])->name('our_customer');
    Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate');
    Route::get('/car-care', [CarCareController::class, 'index'])->name('car_care');
    Route::get('/car-care/{model}/{type}', [CarCareController::class, 'product'])->name('car_care.product');
    Route::get('/house-care', [HouseCareController::class, 'index'])->name('house_care');
    Route::get('/house-care/{model}/{type}', [HouseCareController::class, 'product'])->name('house_care.product');
    Route::get('/personal-care', [PersonalCareController::class, 'index'])->name('personal_care');
    Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contactus');
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy_policy');
    Route::get('/term-and-condition', [PrivacyPolicyController::class, 'term'])->name('termcondition');
    Route::get('/career', [CareerController::class, 'index'])->name('career');
    Route::get('/career/{slug}', [CareerController::class, 'detail'])->name('career.detail');
});