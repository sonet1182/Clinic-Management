<?php

use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ListController;
use App\Http\Controllers\backend\MediaController;
use App\Http\Controllers\backend\OfferController;
use App\Http\Controllers\backend\PackageController;
use App\Http\Controllers\backend\PromoCodeController;
use App\Http\Controllers\backend\ReceiptController;
use App\Http\Controllers\backend\TestController;
use App\Http\Controllers\backend\WebSettingsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\frontend\HomepageController;
use App\Http\Controllers\frontend\ProductController as FrontendProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Zone\DistrictController;
use App\Http\Controllers\Zone\DivisionController;
use App\Http\Controllers\Zone\ThanaController;
use App\Http\Controllers\Zone\ZoneController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Frontend Start
Route::get('/', [HomepageController::class, 'index']);
Route::get('/about-us', [HomepageController::class, 'about_us']);
//Frontend End

// Yajra Data Table Start
Route::get('students', [StudentController::class, 'index']);
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');
// Yajra Data Table End


//Sent SMS Start
// Send SMS by HTTP
Route::get('/sms', [HomeController::class, "sms"]);
// Send SMS by PHP Script
Route::get('/sms2', [HomeController::class, "sms2"]);
//Sent SMS End


//Drag and Drop Data Order Start
Route::get('/post/order', [PostController::class, 'post_order'])->name('post.post_order');
Route::post('/post/post_order_change', [PostController::class, 'post_order_change'])->name('post.order_change');
//Drag and Drop Data Order End


Route::get('posts/{status?}/{show_result?}/{s_query?}', [PostController::class, 'index'])->name('items.filter');
Route::delete('/delete_multipost', [PostController::class, 'delete_multipost'])->name('post.delete_multipost');


Auth::routes();

//Zone Ajax
Route::get('/district-list', [ZoneController::class, "districts"]);
Route::get('/thana-list', [ZoneController::class, "thanas"]);





//New Routes for Backend
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('home');

    Route::resource('web_property', WebSettingsController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    //Zone
    Route::resource('divisions', DivisionController::class);
    Route::resource('districts', DistrictController::class);
    Route::resource('thanas', ThanaController::class);

    //Category
    Route::resource('categories', CategoryController::class);

    //Brand
    Route::resource('brands', BrandController::class);
    Route::get('brand_list', [BrandController::class, 'list'])->name('brands.list');
    //Offer
    Route::resource('offers', OfferController::class);
    Route::get('offer_list', [OfferController::class, 'list'])->name('offers.list');

    //Banner
    Route::resource('banners', BannerController::class);
    Route::get('banner_list', [BannerController::class, 'list'])->name('banners.list');

    //test
    Route::resource('tests', TestController::class);
    Route::get('test_list', [TestController::class, 'list'])->name('tests.list');

    //package
    Route::resource('packages', PackageController::class);
    Route::get('package_list', [PackageController::class, 'list'])->name('packages.list');

    //package
    Route::resource('receipts', ReceiptController::class);

    //Promo Code
    Route::resource('promocodes', PromoCodeController::class);
    Route::get('promo_code_list', [PromoCodeController::class, 'list'])->name('promocodes.list');

    //Product
    Route::get('products/stock_alert', [ProductController::class, 'stock_alert'])->name('products.stock_alert');
    Route::resource('products', ProductController::class);
    Route::get('product_list', [ProductController::class, 'list'])->name('products.list');
    Route::get('stock_alert_list', [ProductController::class, 'stock_alert_list'])->name('products.stock_alert_list');
    Route::get('export_prod_csv',  [ProductController::class, 'exportCSVFile'])->name('products.export_csv');

    //Media
    Route::get('media/all', [MediaController::class, 'index'])->name('media_index');
    Route::post('media/store', [MediaController::class, 'store'])->name('media_store');
    Route::post('media/store/noajax', [MediaController::class, 'storeMedia'])->name('media_store_noajax');
    Route::get('media/get', [MediaController::class, 'getMedia'])->name('media_get');
    Route::get('media/delete/{id}', [MediaController::class, 'destroy'])->name('media_delete');
    Route::delete('media/delete_ajax', [MediaController::class, 'destroy_ajax'])->name('media_delete_ajax');
});



Route::get('{slug}', [FrontendProductController::class, 'showBySlug'])
    ->where('slug', '.*')->name('category');
