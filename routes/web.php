<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('contact');
});

Route::post('/', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'body' => 'required',
    ]);
    return view('complete');
});