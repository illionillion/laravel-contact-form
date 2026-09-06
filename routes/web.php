<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;

Route::get('/', function () {
    return view('contact');
});

Route::post('/', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'body' => 'required',
    ]);

    Contact::create($request->only(['name', 'email', 'body']));

    return view('complete');
});