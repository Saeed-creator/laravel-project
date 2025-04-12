<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/MyCollageName/laravel', function () {
    return "ASPU";
});


    //Route::view('/students', 'students', ['name' => 'Ismaile']);


// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });

 Route::get('/user/{id}', function (string $id) {
    return "User $id";
});

// Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
//     return 'Post IS : '.$postId.' The comment Is:'.$commentId;

// });

// Route::get('/students/classes/{name?}', function (string $name = 'applications development') {
//     return $name;
// });

// Route::get('/Products/{id}', function (string $id) {
//     return $id;
// })->where('id', '[0-9]+');



// Route::get('/user/account/profile/personalinfo', function () {
//     return "Personal Info For User";
// })->name('profile');


// Route::get('/user/account/profile/', function () {
//     return redirect()->route('profile');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('dashboard', function () {
//         return 'Admin Dashboard';
//     });
//     Route::get('users', function () {
//         return 'Admin Users';
//     });
// });


// Route::prefix('users')->group(function () {
//     Route::get('/index', [UserController::class, 'index']);
//     Route::get('/show/{id}', [UserController::class, 'show']);
// });