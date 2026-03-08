<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthorController as AdminAuthorController;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\Admin\ShelfController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Student\StudentBookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\UserBorrowingController;

Route::get('/', [HomeController::class, 'index'])->name('user.home'); 

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/author', [AuthorController::class, 'index'])->name('admin.author');
    Route::get('/settings', function () {
        return view('pages.admin.settings');
    })->name('admin.settings');
});

Route::resource('book', BookController::class);

Route::controller(AdminAuthorController::class)->group(function () {
    Route::get('/author', 'index')->name('admin.author');
    Route::post('/author', 'store')->name('admin.author.store');
    Route::patch('/author/{author_id}', 'update')->name('admin.author.update');
    Route::delete('/author/{author_id}', 'delete')->name('admin.author.delete');
});

Route::get('/publisher', [PublisherController::class, 'index'])->name('admin.publisher');
Route::post('/publisher/store', [PublisherController::class, 'store'])->name('admin.publisher.store');
Route::patch('/publisher/update/{publisher_id}', [PublisherController::class, 'update'])->name('admin.publisher.update');
Route::delete('/publisher/delete/{publisher_id}', [PublisherController::class, 'delete'])->name('admin.publisher.delete');

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('admin.category');
    Route::post('/category', 'store')->name('admin.category.store');
    Route::patch('/category/{category_id}', 'update')->name('admin.category.update');
    Route::delete('/category/{category_id}', 'delete')->name('admin.category.delete');
});

Route::controller(ShelfController::class)->group(function () {
    Route::get('/shelf', 'index')->name('admin.shelf');
    Route::post('/shelf', 'store')->name('admin.shelf.store');
    Route::patch('/shelf/{shelf_id}', 'update')->name('admin.shelf.update');
    Route::delete('/shelf/{shelf_id}', 'delete')->name('admin.shelf.delete');
});

// 🔹 keluar dari group ShelfController
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('Auth.register');
    Route::post('/register', 'action')->name('Auth.registerAction');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');          
    Route::post('/login', 'action')->name('login.action'); 
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('Auth.register');
    Route::post('/register', 'action')->name('Auth.registerAction');
});

Route::get('borrowing', [\App\Http\Controllers\Admin\BorrowingController::class, 'index'])->name('admin.borrowings.index');
Route::post('admin/borrowing/{id}/update', [\App\Http\Controllers\Admin\BorrowingController::class, 'update'])->name('admin.borrowings.update');

Route::middleware(['auth'])->group(function () {
    Route::prefix('/admin')->group(function() {
        //
    });
    Route::post('/borrow/{book}', [BorrowingController::class, 'borrowBook'])->name('borrow.book');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/student/borrowing', [UserBorrowingController::class, 'index'])->name('user.borrowings');
    Route::post('/student/{borrowing}/return', [UserBorrowingController::class, 'markReturned'])->name('user.borrowings.return');
});

Route::get('/student/book', [StudentBookController::class, 'index']);