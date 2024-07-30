<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
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
    return view('front.index');
});

Route::get('/tentang-kami', function () {
    return view('front.about');
});
Route::get('/bumdes', function () {
    return view('front.program.bumdes');
});
Route::get('/umkm', function () {
    return view('front.program.umkm');
});
Route::get('/mitra', function () {
    return view('front.client');
});
Route::get('/portofolio', function () {
    return view('front.portofolio');
});

Route::get('/dokumen', function () {
    return view('front.document');
});

// Route::get('/dashboard', function () {
//     return view('back.dashboard');
// });

Route::get('/masuk', function () {
    return view('back.auth.login');
});

Route::get('/daftar', function () {
    return view('back.auth.register');
});

Route::get('/banner', function () {
    return view('back.banner.index');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'auth'])->name('auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('auth_register', [AuthController::class, 'auth_register'])->name('auth_register');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('dashboard', DashboardController::class);
        Route::get('/member', [DashboardController::class, 'user'])->name('user');

        //Archive
        Route::group(['prefix' => '/document'], function () {
            Route::get('/', [DocumentController::class, 'index'])->name('admin.document');
            Route::get('/create', [DocumentController::class, 'create'])->name('admin.document.create');
            Route::post('/store', [DocumentController::class, 'store'])->name('admin.document.store');
            Route::get('/edit/{id}', [DocumentController::class, 'edit'])->name('admin.document.edit');
            Route::post('/update/{id}', [DocumentController::class, 'update'])->name('admin.document.update');
            Route::post('/delete/{id}', [DocumentController::class, 'destroy'])->name('admin.document.destroy');

            // document Category
            Route::group(['prefix' => '/category'], function () {
                Route::get('/', [DocumentController::class, 'indexCategory'])->name('admin.document.category');
                Route::get('/create', [DocumentController::class, 'createCategory'])->name('admin.document.category.create');
                Route::post('/store', [DocumentController::class, 'storeCategory'])->name('admin.document.category.store');
                Route::get('/edit/{id}', [DocumentController::class, 'editCategory'])->name('admin.document.category.edit');
                Route::post('/update/{id}', [DocumentController::class, 'updateCategory'])->name('admin.document.category.update');
                Route::post('/delete/{id}', [DocumentController::class, 'destroyCategory'])->name('admin.document.category.destroy');
            });
        });
    });
});
