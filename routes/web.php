<?php

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
    return redirect(route('home.index'));
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('adminHome', 'HomeController@admin_home')->name('admin.home');

    Route::get('adminHomeAbout', 'HomeController@admin_home_about')->name('admin.home.about');

    Route::get('adminHomeTestimonials', 'HomeController@admin_home_testimonials')->name('admin.home.testimonials');

    Route::get('adminAboutArticle', 'AboutController@article')->name('admin.about.article');

    Route::get('adminAboutManagerInfor', 'AboutController@manager_information')->name('admin.about.manager.info');

    Route::get('adminAboutStatements', 'AboutController@statements')->name('admin.about.statements');

    Route::get('adminServicesMain', 'ServiceController@main_service')->name('admin.services.service');

    Route::get('adminServicesCounter', 'ServiceController@counter')->name('admin.service.counter');

    Route::get('adminShopItems', 'ShopController@items')->name('admin.shop.items');

    Route::get('adminShopOrders', 'ShopController@orders')->name('admin.shop.orders');

    Route::get('adminShopReviews', 'ShopController@reviews')->name('admin.shop.reviews');

    Route::get('adminBlogView', 'BlogController@admin_blog_view')->name('admin.blog.view');

    Route::get('whyCoachingAjax', 'WhyCoachingController@dataAjax')->name('why.coaching.ajax');

    Route::get('testimonialAjax', 'TestimonialController@dataAjax')->name('testimonial.ajax');

    Route::get('servicesAjax', 'ServiceController@dataAjax')->name('services.ajax');

    Route::get('mainServicesAjax', 'MainServiceController@dataAjax')->name('mainservices.ajax');

    Route::get('serviceCounterAjax', 'ServiceCounterController@dataAjax')->name('service.counter.ajax');

    Route::get('blogAjax', 'BlogController@dataAjax')->name('blog.ajax');

    Route::get('blogCategoryAjax', 'BlogCategoryController@dataAjax')->name('blog.category.ajax');

    Route::get('usersAjax', 'UserController@dataAjax')->name('users.ajax');

    Route::get('callbackAjax', 'CallbackRequestController@dataAjax')->name('callback.ajax');

    Route::get('yourthoughtAjax', 'YourThoughtController@dataAjax')->name('thought.ajax');

    Route::get('yourThoughts', 'YourThoughtController@your_thought_view')->name('yourThoughts');

    Route::get('blogCommentAjax/{id}', 'BlogCommentController@dataAjax')->name('blogComment.ajax');

    Route::get('blogCommentReplyAjax/{id}', 'BlogCommentReplyController@dataAjax')->name('blogCommentReply.ajax');

    Route::resource('blogCommentReply', 'BlogCommentReplyController');

    Route::resource('blogComment', 'BlogCommentController');

    Route::resource('users', 'UserController');

    Route::resource('blogCategory', 'BlogCategoryController');

    Route::resource('serviceCounter', 'ServiceCounterController');

    Route::resource('main_service', 'MainServiceController');

    Route::resource('companyDetail', 'CompanyDetailController');

    Route::resource('testimonial', 'TestimonialController');

    Route::resource('admin_why', 'WhyCoachingController');

    Route::resource('admincontact', 'ContactInformationController');

    Route::patch('managerUpdate/{id}', 'AboutController@updates');

    Route::get('callbackArchived', 'CallbackRequestController@archived')->name('callback.archived');

    Route::patch('callbackArchive/{id}', 'CallbackRequestController@archive')->name('callback.archive');

    Route::get('callbackArchiveAjax', 'CallbackRequestController@dataArchiveAjax')->name('callback.archive.ajax');

    Route::get('yourThoughtsArchived', 'YourThoughtController@Archived')->name('yourThoughts.archived');

    Route::patch('yourThoughtsArchive/{id}', 'YourThoughtController@Archive')->name('yourThoughts.archive');

    Route::get('yourThoughtsArchive.ajax', 'YourThoughtController@dataArchiveAjax')->name('yourThoughts.archive.ajax');
});


Route::resource('callback', 'CallbackRequestController');

Route::resource('about', 'AboutController' );

Route::resource('service', 'ServiceController' );

Route::resource('blog', 'BlogController');

Route::resource('home', 'HomeController');

Route::resource('shop', 'ShopController');

Route::resource('contact', 'YourThoughtController');

Route::get('blogwithCategory/{id}', 'BlogController@category')->name('blog.category');

// You have not worked with order controller , make it work
Route::resource('order', 'OrderController');

Route::get('shop-readmore', function(){
    $page='shop';
    return view('client.shop_readmore', compact('page'));
})->name('shop.readmore');

