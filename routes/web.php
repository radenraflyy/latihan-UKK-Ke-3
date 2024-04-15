<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MyCollectionController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\ReviewsController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isGuest;
use App\Http\Middleware\isStaff;
use App\Http\Middleware\isUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('pages.dashboard');
    });

    // Authenticate Only Admin and Staff Start
    Route::middleware([isAdmin::class])->group(function () {
        // Route Book Start
        Route::get('data-book', [BookController::class, 'index']);
        Route::post('data-book', [BookController::class, 'store'])->name('create.book');
        Route::post('set-rack/{id}', [BookController::class, 'setRack'])->name('set-rack.book');
        Route::patch('data-book/{id}', [BookController::class, 'update'])->name('update.book');
        Route::delete('data-book/{id}', [BookController::class, 'destroy'])->name('delete.book');
        // Route Category End

        // Route Category Start
        Route::get('data-category', [CategoryController::class, 'index']);
        Route::post('data-category', [CategoryController::class, 'store'])->name('create.category');
        Route::patch('data-category/{id}', [CategoryController::class, 'update'])->name('update.category');
        Route::delete('data-category/{id}', [CategoryController::class, 'destroy'])->name('delete.category');
        // Route Category End

        // Route Rack Start
        Route::get('data-rack-book', [RackController::class, 'index']);
        Route::post('data-rack-book', [RackController::class, 'store'])->name('create.rack');
        Route::patch('data-rack-book/{id}', [RackController::class, 'update'])->name('update.rack');
        Route::delete('data-rack-book/{id}', [RackController::class, 'destroy'])->name('delete.rack');
        // Route Rack End

        // Export Start
        Route::post('export-users', [AuthController::class, 'export'])->name('export.users');
        // Export End
    });
    // Authenticate Only Admin and Staff Start

    // Book Start
    Route::get('books-user', [BookController::class, 'searchBook']);
    // Book End

    // MyCollection Start
    Route::get('my-collection', [MyCollectionController::class, 'index']);
    Route::post('add-collection/{book_id}', [MyCollectionController::class, 'store'])->name('add.collection');
    Route::delete('remove-collection/{id}', [MyCollectionController::class, 'destroy'])->name('remove.collection');
    // MyCollection End

    // Review Start
    Route::get('view-detail{id}', [ReviewsController::class, 'index']);
    Route::post('view-detail{book_id}', [ReviewsController::class, 'store'])->name('add.review');
    // Review End

    // Borrowed Start
    Route::post('borrow/{book_id}', [BorrowedController::class, 'store'])->name('borrow.book');
    Route::patch('return/{id}', [BorrowedController::class, 'update'])->name('return.book');
    Route::get('data-borrow', [BorrowedController::class, 'index']);
    // Borrowed End

    // Authenticate Only Admin Start
    Route::middleware(isStaff::class)->group(function () {
        Route::get('user-data', [AuthController::class, 'pageUserData']);
        Route::patch('user-data/{id}', [AuthController::class, 'updateUser'])->name('update.users');
        Route::delete('user-data/{id}', [AuthController::class, 'deleteUser'])->name('delete.users');
    });
    // Authenticate Only Admin End

    // Auth Start
    Route::get('logout', [AuthController::class, 'doLogout'])->name('logout.users');
    // Auth End
});



Route::middleware(isGuest::class)->group(function () {
    // Auth Start
    Route::get('auth/login', [AuthController::class, 'index'])->name('login');
    Route::post('auth/register', [AuthController::class, 'register'])->name('do.register');
    Route::post('auth/login', [AuthController::class, 'login'])->name('do.login');
    Route::get('auth/register', [AuthController::class, 'pageRegister']);
    // Auth End
});
