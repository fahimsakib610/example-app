<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});

// Route::get('/', Use[UserController::class, 'index']);
// Route::get('/homepage', function () {
//     return view('homepage');
// });

// Route::view('/homepage', 'homepage');

// // Route::get('/greeting', function () {
// //     return 'Hello World';
// // }

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     // return 'User '.$id. 'Name '.$name;
//     return view('userpage', ['id' => $id, 'name' => $name]);
// })->where('name', '[A-Za-z]+');


Route::prefix('blog')->group(function () {
    Route::get('/view', function () {
        return 'This is the blog view page';
    });
    Route::get('/create', function () {
        return 'This is the blog create page';
    });
    Route::get('/update', function () {
        return 'This is the blog update page';
    });
    Route::get('/delete', function () {
        return 'This is the blog delete page';
    });
    Route::get('/fallback', function () {
        return 'This is the blog fallback page';
    });
});


Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/feature', function () {
    return view('feature');
});

Route::get('/alpha', function () {
    return view('alpha');
});


Route::get('/bravo', function () {
    return view('bravo');
});