<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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

Route::get('our-policies', function () {
    return   view(view: 'docs/our-policies');
});
Route::get('booking-policy', function () {
    return   view(view: 'docs/booking-policy');
});

Route::get('tuition-delivery-policy', function () {
    return   view(view: 'docs/tuition-delivery-policy');
});

Route::get('dressing-policy', function () {
    return   view(view: 'docs/dress-policy');
});

Route::get('terms', function () {
    return   view(view: 'docs/terms');
});
Route::get('privacy-policy', function () {
    return   view(view: 'docs/privacy-policy');
});


// BLOG
// routes/web.php
Route::get('blog', function () {
    return view('blog.home');
});

// routes/web.php
Route::get('/blog/national-curriculum', function () {
    return view('blog.national_curriculum');
});

