<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\WatchAllController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TestBlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin', function () {
    return view('darkboard');
})->name('layouts.admin');

//Admin
Route::get('/index_admin', [CategoryController::class, 'DS_admin'])->name('category.index_admin');
Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/edit/{id_sanpham}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/update/{id_sanpham}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/delete-sanpham/{id_sanpham}', [CategoryController::class, 'delete'])->name('category.delete');
Route::get('/add', [CategoryController::class, 'create'])->name('category.add');
Route::get('/show/{id_sanpham}', [CategoryController::class, 'detail'])->name('show');

// Customer
Route::get('/customer', [UserController::class, 'Customer'])->name('Cus.customer');
Route::get('/delete-user/{id_users}', [UserController::class, 'deleteCustomer'])->name('Cus.delete');

//Blog
Route::get('/index_blog', [TestBlogController::class, 'index'])->name('blog_admin');
Route::post('/add-blog', [TestBlogController::class, 'create'])->name('addblog');
Route::get('/delete-blog/{id}', [TestBlogController::class, 'deleteBlog'])->name('deleteblog');
Route::get('/update-blog/{id}', [TestBlogController::class, 'updateBlog'])->name('Blog.updateBlog');
Route::get('/edit-blog/{id}', [TestBlogController::class, 'editBlog'])->name('Blog.editblog');
Route::get('/show-blog/{id}', [TestBlogController::class, 'detailBlog'])->name('show-blog');
Route::post('/store-blog', [TestBlogController::class, 'storeBlog'])->name('storeblog');
Route::put('/update-blog/{id}', [TestBlogController::class, 'updateBlog'])->name('Blog.updateBlog');

//FE
Route::get('/index', [HomeController::class, 'index'])->name('FE.index');
Route::get('/introduce', [HomeController::class, 'introduce'])->name('FE.introduce');
Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'postRegister']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/watchall', [WatchAllController::class, 'watchall'])->name('FE.watchall');
Route::get('chi-tiet-san-pham/{id}', [DetailController::class, 'showProduct'])->name('FE.detail');
Route::get('BlogDetail/{id}', [HomeController::class, 'BlogDetail'])->name('FE.BlogDetail');
// Cart
Route::post('/save-cart', [CartController::class, 'saveCart']);
Route::get('/show_cart', [CartController::class, 'showCart'])->name('FE.show_cart');
Route::post('/update-cart', [CartController::class, 'update_cart']);
// Route::post('/update-cart_product', [CartController::class, 'update_cart_product']);
Route::post('delete-to-cart/{product_id}', [CartController::class, 'delete_to_cart'])->name('delete_to_cart');
//checkout
Route::get('check-out', [CartController::class, 'Checkout'])->name('FE.checkout');
Route::post('/check-out', [OrderController::class, 'checkout'])->name('check-out');
Route::get('/order-cart', [OrderController::class, 'save_checkout']);
Route::get('/order-cart', [OrderController::class, 'save_checkout']);

//checkout admin 
Route::get('/index_checkout', [OrderController::class, 'index_checkout'])->name('index_checkout');
Route::get('/detail_checkout/{iddetail_order}', [OrderController::class, 'detail_checkout'])->name('detail_checkout');

