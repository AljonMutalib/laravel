<?php

use Illuminate\Support\Facades\Route;

Route::get('/page1/{artist}', function (string $artist) {
    $months = array("Jan","Feb");
    return view('pages.page1', compact('artist','months'));
})->name('p1');

Route::get('/page2/{location}', function (string $location) {
    return view('pages.page2', compact('location'));
})->name('p2');

Route::get('/page3/{food}', function (string $food) {
    return view('pages.page3', compact('food'));
})->name('p3');


// Route::get('/page1/{artist}', function (string $artist) {
//     return view('pages.page1', compact('artist'));
// });
// Route::get('/page2/{location}', function (string $location) {
//     return view('pages.page2', compact('location'));
// });

// Route::get('/page3/{food}', function (string $food) {
//     return view('pages.page3', compact('food'));
// });



// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/show_page_1', function () {
//     return view('page1');
// });

// Route::get('/employee', function () {
//     return view('employees.employee');
// });

// Route::get('/greet', function () {
//     return "Hello Laravel User";
// });

// Route::get('/add/record', function () {
//     return "2 segment uri";
// });

// Route::get('/show/record/students', function () {
//     return "another 3 segment uri";
// });

// Route::get('/show/record/{appts_id}', function () {
//     return "3 segment uri";
// });

// Route::get('/record/{appts_id}/delete', function () {
//     return "3 delete uri";
// });


// Route::get('/employee/{lastname}/{firstname}', function (string $lname, string $fname) {
//     return $lname.",".$fname;
// });
