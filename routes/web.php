<!-- <?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\controllers\DataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/donation', [UserController::class, 'show']);

Route::get('/test', [UserController::class, 'show']);

Route::get('/test', function () {
    return view('test1', ['name' => 'James']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

{
    Route::get('/About', function () {
        return view('About');
    })->name('About');
};

{
    Route::get('/achivement', function () {
        return view('achivement');
    })->name('achivement');
};

{
    Route::get('/test', function () {
        return view('test');
    })->name('test');
};