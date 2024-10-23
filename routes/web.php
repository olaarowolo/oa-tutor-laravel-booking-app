<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coding4kids', function () {
    return  view('coding4kids');
});

Route::get('eleven-plus', function () {
    return view('11+');
});


Route::get('key-stage-1', function () {
    return   view(view: 'key-stage-1');
});


Route::get('key-stage-2', function () {
    return   view(view: 'key-stage-2');
});


Route::get('key-stage-3', function () {
    return   view(view: 'key-stage-3');
});


Route::get('booking-policy', function () {
    return   view(view: 'booking-policy');
});
Route::get('tuition-delivery-policy', function () {
    return   view(view: 'tuition-delivery-policy');
});
