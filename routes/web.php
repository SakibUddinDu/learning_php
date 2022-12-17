<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
// use App\Notifications\PostCreated;
// use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
// Route::post('/posts', function () {
//     return view('/posts');
// });
Route::get('/items', function () {
    return view('items');
});

Route::get('/dashboard', function () {
    $posts = Post::all();
    // dd($posts);
    return view('dashboard',[
        'postgulu'=> $posts
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // add post : add method
    Route::post('/add-post', [PostController::class, 'add'])->name('add-post');

    Route::get('/posts', [PostController::class, 'index'])->name('postgulu');

    Route::get('/edit-post/{id}', [PostController::class, 'edit'])->name('editPost');

    Route::post('/update-post/{id}', [PostController::class, 'update'])->name('updatePost');

    Route::post('/delete-post/{id}', [PostController::class, 'delete'])->name('deletePost');
    
    // Route::get('/notification',function(){
    //     $user =Auth::user();
    //     $user->notify(new PostCreated());

    //     return "ok";
    // });

});

require __DIR__.'/auth.php';
