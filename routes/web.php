<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail-form', function () {
    return view('mailform');
});
Route::post('/send-mail', [MailController::class, 'sendMail'])->name('send.mail');

Route::post('/send-mail-form', [MailController::class, 'sendMailForm'])->name('send.mail.form');

Route::get('/email-confirmation', function () {
    return view('registration-email');
})->name('mail.confirmation');

