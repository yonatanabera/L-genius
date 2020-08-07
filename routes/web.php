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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('admin', function(){
//     return view('admin.blog.view');
// });

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

Route::resource('about', 'AboutController' );

Route::resource('service', 'ServiceController' );

Route::resource('blog', 'BlogController');

Route::resource('home', 'HomeController');

Route::resource('shop', 'ShopController');

Route::resource('contact', 'YourThoughtController');

Route::resource('callback', 'CallbackRequestController');

Route::resource('order', 'OrderController');

$page='';
// Route::get('shop', function(){
//     $page='shop';
//     return view('client.shop', compact('page'));
// })->name('shop');

Route::get('shop-readmore', function(){
    $page='shop';
    return view('client.shop_readmore', compact('page'));
})->name('shop.readmore');

// Route::get('/', function(){
//     $page='home';
//     return view('client.home', compact('page'));
// })->name('home');

// Route::get('blog', function(){
//     $page='blog';
//     return view('client.blog', compact('page'));
// })->name('blog');

// Route::get('blog-readmore', function(){
//     $page='blog';
//     return view('client.blog_readmore', compact('page'));
// })->name('blog.readmore');

// Route::get('about', function(){
//     $page='about';
//     return view('client.about', compact('page'));
// })->name('about');

// Route::get('contact', function(){
//     $page='contact';
//     return view('client.contact', compact('page'));
// })->name('contact');

// Route::get('servicereadmore', function(){
//     $page='service';
//     return view('client.services_readmore', compact('page'));
// })->name('service.readmore');

// Route::get('service', function(){
//     $page='service';
//     return view('client.services', compact('page'));
// })->name('service');



