<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('data-book', function () {
    return view('pages.data.book');
});

Route::get('data-category', function () {
    return view('pages.data.category');
});

Route::get('data-rack-book', function () {
    return view('pages.data.rack');
});

Route::get('data-borrow', function () {
    return view('pages.borrow');
});

Route::get('user-data', function () {
    return view('pages.user-data');
});

Route::get('my-collection', function () {
    return view('pages.my-collection');
});

Route::get('books-user', function () {
    return view('pages.books-user');
});

Route::get('view-detail', function () {
    return view('pages.view-detail-book');
});

Route::get('auth/login', function () {
    return view('pages.auth.login');
});


Route::get('auth/register', function () {
    return view('pages.auth.register');
});
