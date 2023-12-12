<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\clientController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\vendorController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\AdminSession;

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

Route::post('api/fetch-states', [vendorController::class, 'fetchState']);
Route::post('api/fetch-cities', [vendorController::class, 'fetchCity']);



Route::get('/paypal', function () {
    return view('myOrder');
});


Route::get('qr/', [clientController::class, 'show'])->name('client.qr');

// route for processing payment
Route::post('/paypal', [PaymentController::class, 'payWithpaypal'])->name('paypal');

// route for check status of the payment
Route::get('/status', [PaymentController::class, 'getPaymentStatus'])->name('status');


Route::get('client/', [clientController::class, 'index'])->name('client.home');
Route::get('deals-grid/', [clientController::class, 'dealsGrid']);
Route::get('deals-list/', [clientController::class, 'dealsList']);
Route::get('deals-single/', [clientController::class, 'dealsSingle']);
Route::get('coupon-grid/', [clientController::class, 'couponGrid']);
Route::get('coupon-list/', [clientController::class, 'couponList']);
Route::get('coupon-detail/{id}', [clientController::class, 'couponDetail'])->name('client.coupon.detail');
Route::get('blog/', [clientController::class, 'blog']);
Route::get('blog-list/', [clientController::class, 'blogList']);
Route::get('category/', [clientController::class, 'category']);
Route::get('cart/', [clientController::class, 'cart']);
Route::get('wishlist/', [clientController::class, 'wishList']);
Route::get('contact/', [clientController::class, 'contact']);
Route::get('faq/', [clientController::class, 'faq']);
Route::get('offer/', [clientController::class, 'offer']);
Route::get('about/', [clientController::class, 'about']);
Route::get('store/', [clientController::class, 'store']);
Route::get('map/', [clientController::class, 'map']);
Route::get('store-detail/{id}', [clientController::class, 'storeDetail']);
Route::get('category-list/{id}', [clientController::class, 'categoryList']);

Route::prefix('client')->group(function () {

    Route::get('scan/{id}', [clientController::class, 'scan'])->name('client.scan');
    Route::get('/login/', [clientController::class, 'login'])->name('client.login')->middleware('clientsession');
    Route::post('/signin/', [clientController::class, 'signIn'])->name('client.signin')->middleware('clientsession');
    Route::get('/signup/', [clientController::class, 'signup'])->name('client.signup');
    Route::post('register', [clientController::class, 'register'])->name('client.register');
    Route::post('contact1', [clientController::class, 'contact1'])->name('client.contact1');
    Route::get('/logout/', [clientController::class, 'logout'])->name('client.logout');
    Route::get('/paypalurl/{id}/{amount}', [PaymentController::class, 'clientpayWithpaypalUrl'])->name('clientpaypalurl');
});


// route for processing payment
Route::post('/client/paypal', [PaymentController::class, 'clientpayWithpaypal'])->name('clientpaypal');

// route for check status of the payment
Route::get('/client/status', [PaymentController::class, 'clientgetPaymentStatus'])->name('clientstatus');


Route::prefix('admin')->group(function () {

    Route::get('/register/', [adminController::class, 'register'])->name('admin.register');


    Route::get('/forgot/', [adminController::class, 'forgot'])->name('admin.forgot');
    Route::post('/signup/', [adminController::class, 'singnUp'])->name('admin.signup');
    Route::get('/login/', [adminController::class, 'login'])->name('admin.login');
    Route::post('/signin/', [adminController::class, 'signIn'])->name('admin.signIn');
});

Route::prefix('admin')->group(function () {

    Route::get('/', [adminController::class, 'index'])->name('admin.dashboard')->middleware('adminsession');
    Route::get('/dashboard/', [adminController::class, 'index'])->middleware('adminsession');
    Route::get('/logout/', [adminController::class, 'logOut'])->name('admin.logout')->middleware('adminsession');
    Route::get('/addcoupon/', [adminController::class, 'addCoupon'])->middleware('adminsession');
    Route::get('/addcategory/', [adminController::class, 'addCategory'])->middleware('adminsession');
    Route::post('/upload-image/', [adminController::class, 'imageStore'])->name('admin.coupon.image')->middleware('adminsession');
    Route::post('/addcategory/', [adminController::class, 'categoryStore'])->name('admin.category')->middleware('adminsession');
    Route::get('/couponlist/', [adminController::class, 'couponList'])->name('admin.coupon.list')->middleware('adminsession');
    Route::get('/categorylist/', [adminController::class, 'categoryList'])->name('admin.category.list')->middleware('adminsession');
    Route::get('/map/', [adminController::class, 'map'])->middleware('adminsession');
    Route::get('/coupon/delete/{id}', [adminController::class, 'couponDelete'])->name('admin.coupon.delete')->middleware('adminsession');
    Route::get('/category/delete/{id}', [adminController::class, 'categoryDelete'])->name('admin.category.delete')->middleware('adminsession');
    Route::get('/coupon/edit/{id}', [adminController::class, 'couponEdit'])->name('admin.coupon.edit')->middleware('adminsession');
    Route::get('/category/edit/{id}', [adminController::class, 'categoryEdit'])->name('admin.category.edit')->middleware('adminsession');
    Route::post('/updatecoupon/', [adminController::class, 'updateimageStore'])->name('admin.coupon.editdetail')->middleware('adminsession');
    Route::post('/updatecategory', [adminController::class, 'updateCategory'])->name('admin.category.editdetail')->middleware('adminsession');
    Route::get('/profile/', [adminController::class, 'profile'])->middleware('adminsession');
    Route::post('/updateprofile', [adminController::class, 'updateProfile'])->name('admin.coupon.editprofile')->middleware('adminsession');
    Route::get('/password/', [adminController::class, 'password'])->middleware('adminsession');
    Route::post('/updatepassword', [adminController::class, 'updatePassword'])->name('admin.coupon.editpassword')->middleware('adminsession');
    Route::get('/userlist', [adminController::class, 'userList'])->name('admin.coupon.userlist')->middleware('adminsession');
    Route::get('/adminlist', [adminController::class, 'adminList'])->name('admin.coupon.adminlist')->middleware('adminsession');
});



Route::prefix('seller')->group(function () {

    Route::get('/paypalurl/{amount}', [PaymentController::class, 'payWithpaypalUrl'])->name('paypalurl');

    Route::get('/register/', [vendorController::class, 'register'])->name('seller.register');
    Route::get('/newpassword/', [vendorController::class, 'newpassword'])->name('seller.newpassword');
    Route::get('/forgot/', [vendorController::class, 'forgot'])->name('seller.forgot');
    Route::post('/signup/', [vendorController::class, 'singnUp'])->name('seller.signup');

    Route::post('/pass/', [vendorController::class, 'pass'])->name('seller.pass');

    Route::get('/login/', [vendorController::class, 'login'])->name('seller.login');
    Route::post('/signin/', [vendorController::class, 'signIn'])->name('seller.signIn');
});

Route::prefix('seller')->group(function () {

    Route::get('/', [vendorController::class, 'index'])->name('seller.dashboard')->middleware('sellersession');
    Route::get('/pricing/', [vendorController::class, 'pricing'])->middleware('sellersession');
    Route::get('/businessprice/', [vendorController::class, 'businessprice'])->middleware('sellersession');
    Route::get('/dashboard/', [vendorController::class, 'index'])->middleware('sellersession');
    Route::get('/logout/', [vendorController::class, 'logOut'])->name('seller.logout')->middleware('sellersession');
    Route::get('/addcoupon/', [vendorController::class, 'addCoupon'])->middleware('sellersession');
    Route::get('/addcategory/', [vendorController::class, 'addCategory'])->middleware('sellersession');
    Route::post('/upload-image/', [vendorController::class, 'imageStore'])->name('seller.coupon.image')->middleware('sellersession');
    Route::post('/addcategory/', [vendorController::class, 'categoryStore'])->name('seller.category')->middleware('sellersession');
    Route::get('/couponlist/', [vendorController::class, 'couponList'])->name('seller.coupon.list')->middleware('sellersession');
    Route::get('/categorylist/', [vendorController::class, 'categoryList'])->name('seller.category.list')->middleware('sellersession');
    Route::get('/map/', [vendorController::class, 'map'])->middleware('sellersession');
    Route::get('/coupon/delete/{id}', [vendorController::class, 'couponDelete'])->name('seller.coupon.delete')->middleware('sellersession');
    Route::get('/category/delete/{id}', [vendorController::class, 'categoryDelete'])->name('seller.category.delete')->middleware('sellersession');
    Route::get('/coupon/edit/{id}', [vendorController::class, 'couponEdit'])->name('seller.coupon.edit')->middleware('sellersession');
    Route::get('/category/edit/{id}', [vendorController::class, 'categoryEdit'])->name('seller.category.edit')->middleware('sellersession');
    Route::post('/updatecoupon/', [vendorController::class, 'updateimageStore'])->name('seller.coupon.editdetail')->middleware('sellersession');
    Route::post('/updatecategory', [vendorController::class, 'updateCategory'])->name('seller.category.editdetail')->middleware('sellersession');
    Route::get('/profile/', [vendorController::class, 'profile'])->middleware('sellersession');
    Route::post('/updateprofile', [vendorController::class, 'updateProfile'])->name('seller.coupon.editprofile')->middleware('sellersession');
    Route::get('/password/', [vendorController::class, 'password'])->middleware('sellersession');
    Route::post('/updatepassword', [vendorController::class, 'updatePassword'])->name('seller.coupon.editpassword')->middleware('sellersession');

    Route::get('/payhistory/', [vendorController::class, 'payhistory'])->middleware('sellersession');
    Route::get('/success/', [vendorController::class, 'paymentsuccess'])->name('seller.success')->middleware('sellersession');
});


Route::get('dates', [vendorController::class, 'dates']);
Route::get('send-mail', function () {

    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];

    'Mail'::to('konarch92@gmail.com')->send(new \App\Mail\PaypalMail($details));

    dd("Email is Sent.");
});


Route::get('sendmail', function () {
    $details = [
        'title' => 'Thank for registration with adspaymax',

        'body' => 'This is for testing email using smtp'

    ];
    'Mail'::to('emaill')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");
});


Route::get('password', function () {
    $details = [
        'title' => 'Thank for registration with adspaymax',

        'body' => 'This is for testing email using smtp'

    ];
    'Mail'::to('emaill')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");
});

// Route::get('contact', function () {
//     $details = [
//         'title' => 'Thank for registration with adspaymax',

//         'body' => 'This is for testing email using smtp'

//     ];
//     'Mail'::to('payal.mundharikar@patterns247.net')->send(new \App\Mail\contact($details));

//     dd("Email is Sent.");
// });
