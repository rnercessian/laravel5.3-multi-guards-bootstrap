<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('subscriber')->user();

    //dd($users);

    return view('subscriber.home');
})->name('home');

