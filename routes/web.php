<?php

use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\EcomController;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Route;


Route::get('/',[EcomController::class,'index'])->name('pages.index');

Route::get('about',[EcomController::class,'about'])->name('pages.about');

Route::get('courses',[EcomController::class,'courses'])->name('pages.courses');

Route::get('services',[EcomController::class,'services'])->name('pages.services');

Route::get('contact-us',[EcomController::class,'contact_us'])->name('pages.contact-us');
Route::post('contact-us',[EcomController::class,'contact_us_form'])->name('pages.contact-us-form');

Route::get('enrollment',[EnrollmentController::class,'enrollment'])->name('pages.enrollment');
Route::post('enrollment',[EnrollmentController::class,'store_enrollment'])->name('pages.store_enrollment');

Route::get('verify-certificate',[CertificatesController::class,'certificate'])->name('pages.certificate');
Route::post('verify-certificate',[CertificatesController::class,'verify_certificate'])->name('pages.verify_certificate');



Route::post('newsletter',[EcomController::class,'newsletter'])->name('pages.newsletter');
Route::post('sitemap',[EcomController::class,'sitemap'])->name('pages.sitemap');
Route::post('privacy-policy',[EcomController::class,'privacy'])->name('pages.privacy-policy');




Route::fallback( function (){
    $title = "404 - Page not Found";
    return view('pages.404-error',compact('title'));

})->name('fallback');
