<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\TarifController;
use App\Models\Category;
use App\Models\partnership;
use App\Models\Post;
use App\Models\Struktur;
use App\Models\Tarif;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.home.index',[
        'strukturs'     => Struktur::get(),
        'posts'         => Post::latest()->limit(6)->get(),
        'partnership'   => partnership::latest()->get(),
    ]);
});

Route::get('/service', function(){
    $tarif  = Tarif::latest()->get();
    return view('frontend.service.index', compact('tarif'));
});

Route::get('/newst', function(){
    $posts      = Post::with('category')->latest()->paginate(6);
    $recent     = Post::with('category')->latest()->limit(3)->get();
    $category   = Category::latest()->get();
    return view('frontend.blog.index', compact('posts', 'category', 'recent'));
});

Route::get('/contact', [ContactController::class, 'indexHome'])->name('contact.home');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');
// Route::get('/contact', function(){
//     return view('frontend.contact.index');
// });

Route::get('/newst-detail/{post}', function(Post $post){
    $category   = Category::latest()->get();
    $recent     = Post::with('category')->latest()->limit(3)->get();
    return view('frontend.blog.blog-detail', compact( 'post', 'category', 'recent'));
});

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('dashboard/struktur', StrukturController::class, ['names' => 'struktur']);
    Route::resource('dashboard/partnership', PartnershipController::class, ['names' => 'partnership']);
    Route::resource('dashboard/tarif', TarifController::class, [ 'names'    => 'tarif']);
    Route::resource('dashboard/category', CategoryController::class, ['names'   => 'category']);
    Route::resource('dashboard/post', PostController::class, ['names' => 'post']);
    Route::get('dashboard//contact', [ContactController::class, 'index'])->name('contact.index');
    Route::delete('dashboard/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
