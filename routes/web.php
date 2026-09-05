<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('contact');
});

Route::post('/', function (Request $request) {
    return $request->all();
});