<?php

use App\Http\Controllers\addMemberController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\fileUploadController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\testController;
use App\Http\Controllers\timeTableController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userListController;
use App\Http\Controllers\UserOperation;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () { 
//     return view('welcome');
// });

Route::get('/test',[testController::class, 'getData']); //this is for test


Route::get('/',[bookController::class, 'welcomeNewBooks'])->name('user.welcome');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/', [timeTableController::class, 'index']);
    Route::post('/newBook',[bookController::class, 'addNewBook'])->name('book.add_newbook');
});

// Route::get('/admin', [timeTableController::class, 'index']);
Route::get('/listed-Books',[bookController::class, 'adminBookList'])->name('admin.book.list');
Route::get('/addBook',[bookController::class, 'getLastBookId'])->name('admin.addbook.page');

Route::view('/profile','admin/profile');
Route::view('/damaged-Books','admin/pages/damagedBooks');
Route::view('/issued-Books','admin/pages/issuedBooks');
Route::view('/borrow-req-Books','admin/pages/borrowReq');
Route::view('/userDetails','admin/pages/usersDetails');
Route::view('/addUser','admin/pages/addNewuser');
Route::view('/issueNewBook','admin/pages/issueNewBook');
Route::view('/addCategory','admin/pages/addCategory');
Route::view('/listedCategories','admin/pages/listedCategories');
Route::view('/addAuthor','admin/pages/addNewAuthor');
Route::view('/listedAuthors','admin/pages/listedAuthors');

//user routes

Route::get('/books-gride',[bookController::class, 'userBookList'])->name('user.book.view');
Route::post('/search-book',[bookController::class, 'bookSearch'])->name('book.search');

Route::view('/ebooks','ebook');













