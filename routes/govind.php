<?php

Route::get('send-email', function(){

    $data['email'][] = 'salimsheikh4u2000@gmail.com';
    $data['email'][] = 'work@infosofttech.com';

    dispatch(new App\Jobs\SendEmailJob($data));

    dd('Email send successfully');
});