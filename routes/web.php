<?php

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserProfileController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destination', function () {
    return view('destination');
});

Route::get('/contact', function () {
    return view('contact');
});

// Print Testing Route
Route::get('/print', [PrintController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/printpdf', [PrintController::class, 'print'])->middleware(['auth', 'verified']);

// Complaint Route
Route::resource('/complaints', ComplaintController::class)->middleware(['auth', 'verified']);

//  Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

//  Order Route
Route::resource('/orders', OrderController::class)->middleware(['auth', 'verified']);

//  Transaction Route
Route::resource('/transactions', TransactionController::class)->middleware(['auth', 'verified']);

//  Airline Route
Route::resource('/airlines', AirlineController::class)->middleware(['auth', 'verified', 'can:isAdmin']);

//  Type Route
Route::resource('/types', TypeController::class)->middleware(['auth', 'verified', 'can:isAdmin']);

//  Track Route
Route::resource('/tracks', TrackController::class)->middleware(['auth', 'verified', 'can:isAdmin']);

//  Ticket Route
Route::resource('/tickets', TicketController::class)->middleware(['auth', 'verified']);

//  Price Route
Route::resource('/prices', PriceController::class)->middleware(['auth', 'verified']);

//  Method Route
Route::resource('/methods', MethodController::class)->middleware(['auth', 'verified', 'can:isAdmin']);

//  User Route
Route::resource('/users', UserController::class)->middleware(['auth', 'verified']);

// Check Price Route
Route::get('/checkprice', [OrderController::class, 'checkprice', 'verified']);

// Route::get('/posts', function () {
//     // Tag::create([
//     //     'name' => 'Laravel'
//     // ]);

//     // Tag::create([
//     //     'name' => 'Youtube'
//     // ]);

//     // Tag::create([
//     //     'name' => 'Facebook'
//     // ]);

//     // Post::create([
//     //     'title' => 'Judul Pertama'
//     // ]);

//     // Post::create([
//     //     'title' => 'Judul Kedua'
//     // ]);

//     // Post::create([
//     //     'title' => 'Judul Ketiga'
//     // ]);

//     // $tag = Tag::first();
//     // $post = Post::first();

//     // $post->tags()->attach([3]);
//     // $post->tags()->detach([1, 2, 3]);

//     // $post->tags()->detach();
//     // $post->tags()->attach([1, 2, 3]);

//     // $post->tags()->sync([1, 2]);
//     // $tag->posts()->sync([3, 4]);



//     // return view('testing.index', [
//     //     'posts' => Post::with(['tags'])->get()
//     // ]);
// });

// Route::get('/tags', function () {
//     // $tags = Tag::with('posts')->get();
//     // $tag = Tag::first();
//     // $tag->posts()->sync([1, 2]);

//     return view('testing.index2', [
//         'tags' => Tag::with(['posts'])->get()
//     ]);
// });

require __DIR__ . '/auth.php';
