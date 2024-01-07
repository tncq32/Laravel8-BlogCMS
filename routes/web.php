<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Products\ProductsCategoriesController;
use App\Http\Controllers\Products\ProductsController;
use App\Http\Controllers\Editors\CkEditorController;
use App\Http\Controllers\Account\OverviewController;
use App\Http\Controllers\AnasayfaController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\BlogCategoriesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FotoGaleriController;
use App\Http\Controllers\HakkimizdaController;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SosyalMedyaController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);

        // Exclude documentation from auth middleware
        if (!Str::contains($val['path'], 'documentation')) {
            $route->middleware('auth');
        }
    }
});



// Documentations pages
Route::prefix('documentation')->group(function () {
    Route::get('getting-started/references', [ReferencesController::class, 'index']);
    Route::get('getting-started/changelog', [PagesController::class, 'index']);
});

Route::prefix('admin')->middleware('auth', 'role:admin')->group(function () {

    Route::get('/', function () {
        return redirect('admin');
    });

    Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

    // Account pages
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');

        Route::get('overview', [OverviewController::class, 'index'])->name('overview.index');
    });

    // Product pages
    /*
    Route::prefix('products')->group(function () {
        Route::get('list', [ProductsController::class, 'index'])->name('products.list');
        Route::get('list/add', [ProductsController::class, 'create'])->name('products.create');
        Route::post('list/add', [ProductsController::class, 'store'])->name('products.store');
        Route::get('list/{id}', [ProductsController::class, 'destroy'])->whereNumber('id')->name('products.destroy');
        Route::get('list/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
        Route::put('list/{id}/edit', [ProductsController::class, 'update'])->name('products.update');

        Route::get('categories', [ProductsCategoriesController::class, 'index'])->name('productCategories.list');
        Route::get('categories/new', [ProductsCategoriesController::class, 'create'])->name('productCategories.create');
        Route::post('categories/new', [ProductsCategoriesController::class, 'store'])->name('productCategories.store');
        Route::get('categories/{id}/edit', [ProductsCategoriesController::class, 'edit'])->name('productCategories.edit');
        Route::put('categories/{id}/edit', [ProductsCategoriesController::class, 'update'])->name('productCategories.update');
        Route::get('categories/{id}', [ProductsCategoriesController::class, 'destroy'])->whereNumber('id')->name('productCategories.destroy');


    }); */
    //Blog Pages
    Route::prefix('blog')->group(function () {
        Route::get('list', [BlogController::class, 'index'])->name('blog.list');
        Route::get('list/new', [BlogController::class, 'create'])->name('blog.create');
        Route::post('list/new', [BlogController::class, 'store'])->name('blog.store');

        Route::get('list/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('list/{id}/edit', [BlogController::class, 'update'])->name('blog.update');
        Route::get('list/{id}', [BlogController::class, 'destroy'])->whereNumber('id')->name('blog.destroy');


        Route::get('categories', [BlogCategoriesController::class, 'index'])->name('blogCategories.list');
        Route::get('categories/new', [BlogCategoriesController::class, 'create'])->name('blogCategories.create');
        Route::post('categories/new', [BlogCategoriesController::class, 'store'])->name('blogCategories.store');

        Route::get('categories/{id}/edit', [BlogCategoriesController::class, 'edit'])->name('blogCategories.edit');
        Route::put('categories/{id}/edit', [BlogCategoriesController::class, 'update'])->name('blogCategories.update');
        Route::get('categories/{id}', [BlogCategoriesController::class, 'destroy'])->whereNumber('id')->name('blogCategories.destroy');
    });
    Route::get('iletisim', [IletisimController::class, 'adminindex'])->name('iletisim.adminindex');
    Route::post('iletisim/guncelle', [IletisimController::class, 'updateOrInsertIletisim'])->name('iletisim.guncelle');
    Route::get('sosyalmedya', [SosyalMedyaController::class, 'index'])->name('sosyalmedya.index');
    Route::get('hakkimizda', [HakkimizdaController::class, 'adminindex'])->name('hakkimizda.adminindex');
    Route::post('hakkimizda/guncelle', [HakkimizdaController::class, 'store'])->name('hakkimizda.guncelle');

    Route::post('/admin/sosyalmedya/update', [SosyalMedyaController::class, 'store'])->name('sosyalmedya.update');

    //Comment Page
    Route::prefix('comments')->group(function () {
        Route::get('list', [CommentController::class, 'index'])->name('comment.list');
        Route::get('list/{id}', [CommentController::class, 'destroy'])->whereNumber('id')->name('comment.destroy');
    });
    Route::get('foto-galeri', [FotoGaleriController::class, 'index'])->name('fotogaleri.index');
    Route::get('notifications', [NotificationController::class, 'sendBlogNotification'])->name('notifications');

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });
});
Route::get('anasayfa', [AnasayfaController::class, 'index'])->name('anasayfa.index');
Route::get('hakkimizda', [HakkimizdaController::class, 'index'])->name('hakkimizda.index');
Route::get('iletisim', [IletisimController::class, 'index'])->name('iletisim.index');

Route::get('index', [DashboardController::class, 'index'])->name('admin.index');

Route::get('blogs', [BlogController::class, 'webindex'])->name('blog.webindex');
Route::get('blogs/{title}-{id}', [BlogController::class, 'webShowBlog'])->name('blog.webShowBlog');
Route::post('blogs/{title}-{id}', [BlogController::class, 'webCreateComments'])->name('blog.webCreateComments');




Route::resource('users', UsersController::class);

/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__ . '/auth.php';
