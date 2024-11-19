<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
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

// Route::get('/', function () {
//     return view('front.index');
// });

Route::get('/', [FrontController::class, 'index'])->name('homepage');
Route::post('/message', [FrontController::class, 'message'])->name('message');
Route::get('/tentang-kami', [FrontController::class, 'about'])->name('about');
Route::get('/bumdes', [FrontController::class, 'bumdes'])->name('bumdes');
Route::get('/umkm', [FrontController::class, 'umkm'])->name('umkm');
Route::get('/mitra', [FrontController::class, 'mitra'])->name('mitra');
Route::get('/portofolio-bumdes', [FrontController::class, 'portoBumdes'])->name('portofolio.bumdes');
Route::get('/portofolio-umkm', [FrontController::class, 'portoUmkm'])->name('portofolio.umkm');
Route::get('/download', [DocumentController::class, 'show']);
Route::get('download/{documents}', [DocumentController::class, 'download'])->middleware('auth');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog/search', [FrontController::class, 'search'])->name('search');
Route::get('/blog/{slug}', [FrontController::class, 'blogShow'])->name('blog.show');
Route::get('/blog/kategori/{slug}', [FrontController::class, 'category'])->name('blog.category');
Route::get('/blog/tag/{slug}', [FrontController::class, 'tag'])->name('blog.tag');

Route::get('/pelatihan-meraviid', function () {
    return view('front.service.pelatihan');
});

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

        //document
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

        Route::group(['prefix' => '/banner'], function () {
            Route::get('/', [BannerController::class, 'index'])->name('admin.banner');
            Route::get('/create', [BannerController::class, 'create'])->name('admin.banner.create');
            Route::post('/store', [BannerController::class, 'store'])->name('admin.banner.store');
            Route::get('/edit/{id}', [BannerController::class, 'edit'])->name('admin.banner.edit');
            Route::post('/update/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
            Route::post('/delete/{id}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');
        });

        Route::group(['prefix' => '/portofolios'], function () {
            Route::get('/', [PortofolioController::class, 'index'])->name('admin.portofolio');
            Route::get('/create', [PortofolioController::class, 'create'])->name('admin.portofolio.create');
            Route::post('/store', [PortofolioController::class, 'store'])->name('admin.portofolio.store');
            Route::get('/edit/{id}', [PortofolioController::class, 'edit'])->name('admin.portofolio.edit');
            Route::post('/update/{id}', [PortofolioController::class, 'update'])->name('admin.portofolio.update');
            Route::post('/delete/{id}', [PortofolioController::class, 'destroy'])->name('admin.portofolio.destroy');
        });

        Route::group(['prefix' => '/testimonial'], function () {
            Route::get('/', [TestimonialController::class, 'index'])->name('admin.testimonial');
            Route::get('/create', [TestimonialController::class, 'create'])->name('admin.testimonial.create');
            Route::post('/store', [TestimonialController::class, 'store'])->name('admin.testimonial.store');
            Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.testimonial.edit');
            Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');
            Route::post('/delete/{id}', [TestimonialController::class, 'destroy'])->name('admin.testimonial.destroy');
        });

        Route::group(['prefix' => '/client'], function () {
            Route::get('/', [ClientController::class, 'index'])->name('admin.client');
            Route::get('/create', [ClientController::class, 'create'])->name('admin.client.create');
            Route::post('/store', [ClientController::class, 'store'])->name('admin.client.store');
            Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('admin.client.edit');
            Route::post('/update/{id}', [ClientController::class, 'update'])->name('admin.client.update');
            Route::post('/delete/{id}', [ClientController::class, 'destroy'])->name('admin.client.destroy');
        });

        Route::group(['prefix' => '/message'], function () {
            Route::get('/', [MessageController::class, 'index'])->name('admin.message');
            // Route::get('/create', [MessageController::class, 'create'])->name('admin.message.create');
            // Route::post('/store', [MessageController::class, 'store'])->name('admin.message.store');
            // Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('admin.message.edit');
            // Route::post('/update/{id}', [MessageController::class, 'update'])->name('admin.message.update');
            Route::post('/delete/{id}', [MessageController::class, 'destroy'])->name('admin.message.destroy');
        });

        // post
        Route::group(['prefix' => '/post'], function () {
            Route::get('/', [PostController::class, 'index'])->name('admin.post');
            Route::get('/create', [PostController::class, 'create'])->name('admin.post.create');
            Route::post('/store', [PostController::class, 'store'])->name('admin.post.store');
            Route::get('/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
            Route::post('/update/{id}', [PostController::class, 'update'])->name('admin.post.update');
            Route::post('/delete/{id}', [PostController::class, 'destroy'])->name('admin.post.destroy');
            // Route::get('posts/trash', [PostController::class, 'trash'])->name('posts.trash');
            // Route::post('posts/trash/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
            // Route::delete('posts/{id}/delete-permanent', [PostController::class, 'deletePermanent'])->name('posts.deletePermanent');


            // Category
            Route::group(['prefix' => '/category'], function () {
                Route::get('/', [CategoryPostController::class, 'index'])->name('admin.post.category');
                Route::get('/create', [CategoryPostController::class, 'create'])->name('admin.post.category.create');
                Route::post('/store', [CategoryPostController::class, 'store'])->name('admin.post.category.store');
                Route::get('/edit/{id}', [CategoryPostController::class, 'edit'])->name('admin.post.category.edit');
                Route::post('/update/{id}', [CategoryPostController::class, 'update'])->name('admin.post.category.update');
                Route::post('/delete/{id}', [CategoryPostController::class, 'destroy'])->name('admin.post.category.destroy');
            });

            // Tag
            Route::group(['prefix' => '/tag'], function () {
                Route::get('/', [TagController::class, 'index'])->name('admin.post.tag');
                Route::get('/create', [TagController::class, 'create'])->name('admin.post.tag.create');
                Route::post('/store', [TagController::class, 'store'])->name('admin.post.tag.store');
                Route::get('/edit/{id}', [TagController::class, 'edit'])->name('admin.post.tag.edit');
                Route::post('/update/{id}', [TagController::class, 'update'])->name('admin.post.tag.update');
                Route::post('/delete/{id}', [TagController::class, 'destroy'])->name('admin.post.tag.destroy');
            });
        });
    });
});
