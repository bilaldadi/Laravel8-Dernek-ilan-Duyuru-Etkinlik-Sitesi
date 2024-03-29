<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController:: class ,'index'])-> name('home');
Route::get('/aboutus', [HomeController:: class ,'aboutus'])-> name('aboutus');
Route::get('/references', [HomeController:: class ,'references'])-> name('references');
Route::get('/contact', [HomeController:: class ,'contact'])-> name('contact');
Route::post('/sendmessage', [HomeController:: class ,'sendmessage'])-> name('sendmessage');
Route::get('/menucontents/{id}/{description}', [HomeController:: class ,'menucontents'])-> name('menucontents');
Route::get('/content/{id}/{title}', [HomeController:: class ,'content'])-> name('content');
Route::get('/faqs', [HomeController:: class ,'faq'])-> name('faqs');
Route::get('/daily', [HomeController:: class ,'daily'])-> name('daily');





Route::get('/admin', [\App\Http\Controllers\Admin\HomeController:: class ,'index'])-> name('admin_home')->middleware('auth');
Route::get('/admin/login', [HomeController:: class ,'login'])-> name('admin_login');
Route::post('/admin/logincheck', [HomeController:: class ,'logincheck'])-> name('admin_logincheck');
Route::get('/admin/logout', [HomeController:: class ,'logout'])-> name('admin_logout');


#Admin
Route::middleware('auth')->prefix('admin')->group(function() {

    #AdminRole
    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\HomeController:: class, 'index'])->name('admin_home');

        Route::get('/menu', [\App\Http\Controllers\Admin\MenuController:: class, 'index'])->name('admin_menu');
        Route::post('/menu/store', [\App\Http\Controllers\Admin\MenuController:: class, 'store'])->name('admin_menu_store');
        Route::get('/menu/add', [\App\Http\Controllers\Admin\MenuController:: class, 'add'])->name('admin_menu_add');
        Route::post('/menu/create', [\App\Http\Controllers\Admin\MenuController:: class, 'create'])->name('admin_menu_create');
        Route::post('/menu/update/{id}', [\App\Http\Controllers\Admin\MenuController:: class, 'update'])->name('admin_menu_update');
        Route::get('/menu/edit/{id}', [\App\Http\Controllers\Admin\MenuController:: class, 'edit'])->name('admin_menu_edit');
        Route::get('/menu/delete/{id}', [\App\Http\Controllers\Admin\MenuController:: class, 'destroy'])->name('admin_menu_delete');
        Route::get('/menu/show', [\App\Http\Controllers\Admin\MenuController:: class, 'show'])->name('admin_menu_show');



    Route::prefix('content')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\contentController:: class, 'index'])->name('admin_content');
        Route::post('/content/store', [\App\Http\Controllers\Admin\contentController:: class, 'store'])->name('admin_content_store');
        Route::get('/content/add', [\App\Http\Controllers\Admin\contentController:: class, 'add'])->name('admin_content_add');
        Route::post('/content/create', [\App\Http\Controllers\Admin\contentController:: class, 'create'])->name('admin_content_create');
        Route::post('/content/update/{id}', [\App\Http\Controllers\Admin\contentController:: class, 'update'])->name('admin_content_update');
        Route::get('/content/edit/{id}', [\App\Http\Controllers\Admin\contentController:: class, 'edit'])->name('admin_content_edit');
        Route::get('/content/delete/{id}', [\App\Http\Controllers\Admin\contentController:: class, 'destroy'])->name('admin_content_delete');
        Route::get('/content/show', [\App\Http\Controllers\Admin\contentController:: class, 'show'])->name('admin_content_show');

    });

    #Messsages

    Route::prefix('message')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\MessageController:: class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\MessageController:: class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\MessageController:: class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\MessageController:: class, 'destroy'])->name('admin_message_delete');
        Route::get(' show', [\App\Http\Controllers\Admin\MessageController:: class, 'show'])->name('admin_message_show');

    });

#End Messages

        #payment

        Route::prefix('payment')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\PaymentController:: class, 'index'])->name('admin_payment');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\PaymentController:: class, 'edit'])->name('admin_payment_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\PaymentController:: class, 'update'])->name('admin_payment_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\PaymentController:: class, 'destroy'])->name('admin_payment_delete');
            Route::get(' show', [\App\Http\Controllers\Admin\PaymentController:: class, 'show'])->name('admin_payment_show');

        });


        #endpayment

    Route::prefix('image')->group(function () {

        Route::get('/image/create/{content_id}', [\App\Http\Controllers\Admin\ImageController:: class, 'create'])->name('admin_image_add');
        Route::post('/image/store/{content_id}', [\App\Http\Controllers\Admin\ImageController:: class, 'store'])->name('admin_image_store');
        Route::get('/image/delete/{id}/{content_id}', [\App\Http\Controllers\Admin\ImageController:: class, 'destroy'])->name('admin_image_delete');
        Route::get('/image/show', [\App\Http\Controllers\Admin\ImageController:: class, 'show'])->name('admin_image_show');

    });

    Route::get('/setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('/setting/update', [\App\Http\Controllers\Admin\SettingController:: class, 'update'])->name('admin_setting_update');

    #FAQ
    Route::prefix('faq')->group(function () {


        Route::get('/', [\App\Http\Controllers\Admin\FaqController:: class, 'index'])->name('admin_faq');
        Route::post('store', [\App\Http\Controllers\Admin\FaqController:: class, 'store'])->name('admin_faq_store');
        Route::get('create', [\App\Http\Controllers\Admin\FaqController:: class, 'create'])->name('admin_faq_add');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController:: class, 'update'])->name('admin_faq_update');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController:: class, 'edit'])->name('admin_faq_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\FaqController:: class, 'destroy'])->name('admin_faq_delete');
        Route::get('show', [\App\Http\Controllers\Admin\FaqController:: class, 'show'])->name('admin_faq_show');

    });
#End FAQ

    });
});

#End_Admin









#user

Route::middleware(['auth'])->prefix('myaccount')->namespace('myaccount')->group(function() {

    Route::get('/', [\App\Http\Controllers\UserController:: class ,'index'])->name('myprofile');
    Route::get('/myreviews', [\App\Http\Controllers\UserController:: class ,'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[\App\Http\Controllers\UserController::class,'destroymyreview'])->name('user_review_delete');

});


Route::middleware(['auth'])->prefix('payment')->namespace('payment')->group(function() {


        Route::get('/', [\App\Http\Controllers\PaymentController:: class, 'index'])->name('user_payments');
        Route::post('store', [\App\Http\Controllers\PaymentController:: class, 'store'])->name('user_payment_store');
        Route::post('create', [\App\Http\Controllers\PaymentController:: class, 'create'])->name('user_payment_add');
        Route::post('update/{id}', [\App\Http\Controllers\PaymentController:: class, 'update'])->name('user_payment_update');
        Route::get('edit/{id}', [\App\Http\Controllers\PaymentController:: class, 'edit'])->name('user_payment_edit');
        Route::get('delete/{id}', [\App\Http\Controllers\PaymentController:: class, 'destroy'])->name('user_payment_delete');
        Route::get('show', [\App\Http\Controllers\PaymentController:: class, 'show'])->name('user_payment_show');

    });







    #End_payment

#Enduser






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




