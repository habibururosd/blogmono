<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopadsController;
use App\Models\Category;
use App\Models\post;
use App\Models\Topads;
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


Route::get('/', function () {
    $data['categories'] = Category::all();
    $data['posts'] = Post::with('category')->where('status',1)->limit(3)->get();
    $data['trendings'] = Post::where('is_trending',1)->get();
    $data['topad']= Topads::first();
    $data['latestPosts']= Post::with('category')->where('status',1)->orderByDesc('id')->limit(2)->get();
//    return view('frontend.layouts.app',$data);
    return view('frontend.index',$data);
});

Route::get('/dashboard', [FrontendController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
   Route::resource('category',CategoryController::class)->except('show');
   Route::resource('post',PostController::class)->except('show');
   Route::resource('top-adv',TopadsController::class)->except('show');


   Route::get('blog-details/{slug}',[FrontendController::class,'blogDetails'])->name('blog.details');


require __DIR__.'/auth.php';
