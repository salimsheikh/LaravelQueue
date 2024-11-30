<?php

use App\Http\Controllers\UserController;

Route::get('create-user',[UserController::class, 'createUser'])->name('create.user');
Route::get('user-user',[UserController::class, 'dispatchJob'])->name('update.user');

Route::get('send-email', function(){

    $data['email'][] = 'salimsheikh4u2000@gmail.com';
    $data['email'][] = 'work@infosofttech.com';

    dispatch(new App\Jobs\SendEmailJob($data));

    dd('Email send successfully');
});