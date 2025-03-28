<?php

use Illuminate\Support\Facades\Route;

Route::get('/hellomodular', function () {
    return view('hellomodular::greeting');
});
