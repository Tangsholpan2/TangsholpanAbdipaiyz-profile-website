<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Http\Controllers\BlogController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about_me');

Route::get('/contact', function () {
    return view('contact');
})->name('contact_me');

Route::get('/hobby', function () {
    return view('hobby');
})->name('hobby');

Route::get('/logo', function () {
    return view('logo');
})->name('logo');

Route::get('post/add', function () {
    DB::table('post')->insert([
    'id'=>105,
    'title'=>'Abdipaiyz',
    'body'=>'boy'
    ]);
});

Route::get('/post', function() {
$post = DB::table('post')->get();
return $post;
});

Route::get('blog',[BlogController::class, 'index']);
