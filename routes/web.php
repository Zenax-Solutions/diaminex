<?php

use App\Models\Sapphire;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $sapphires = Sapphire::where('is_published', true)->get();

    return view('welcome', compact('sapphires'));
});

Route::get('/gems/{slug}', function ($slug) {

    $gem = Sapphire::where('slug', $slug)->first();

    return view('details-page', compact('gem'));
})->name('details');


Route::get('/about-us', function () {
    return view('about-us');
});
