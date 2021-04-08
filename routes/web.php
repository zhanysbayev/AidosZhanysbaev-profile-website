<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\post;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\ClientController;

use App\Http\Controllers\MailController;
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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('post/create', function(){
     DB::table('post')->insert([
        'title' => 'Hello',
        'body' => 'Goodbye'
     ]);
});

Route::get('blog', [BlogController:: class, 'index']);
Route::get('blog/create', function(){
return view('blog.create');
});
Route::post('blog/create',[BlogController::class, 'store'])->name('add-blog');

Route::get('blog/{id}', [BlogController::class, 'get_blog' ]);

Route::get('client',[ClientController::class, 'index']);
Route::get('client/create', function(){
    return view('client.create');
});

Route::post('client/create',[ClientController::class, 'store'])->name('add-client');

Route::get('mail/send', [MailController::class, 'send']);

Route::get('home/{lang}', function($lang){
    App::setlocale($lang);
    return view('home');
});
Route::get('about/{lang}', function($lang){
    App::setlocale($lang);
    return view('about');
});
Route::get('contact/{lang}', function($lang){
    App::setlocale($lang);
    return view('contact');
});
