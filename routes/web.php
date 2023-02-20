<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/users', [TaskController::class, 'index']);

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contacts/{id}/store', [ContactController::class, 'update'])->name('contact.update');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contacts/{id}/delete', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::get('/album', [\App\Http\Controllers\ImageController::class, 'index']);
Route::post('/album', [\App\Http\Controllers\ImageController::class, 'store'])->name('album.store');



Route::get('/task', function () {
    $post = Video::find(2);
    $comment = new Comment();
    $comment->body = "TTjyjdnnfdbsfbfTTt";
    $post->comments()->save($comment);
//    $post->tag()->attach(4);
});
Route::get('post', function () {
    $post = Post::find(2);
    $post->tag()->attach(4);
});
//
//Route::prefix('jobs')->name('jobs.')->group(function (){
//   Route::get('add_job', [TaskController::class, 'create'])->name('add_job');
//   Route::post('add_job', [TaskController::class, 'store'])->name('store');
//});


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
