<?php

use WVI\CMSCore\Facades\CMSCore;

Route::group(['prefix'=>'admin'], function () {
	Route::get('/reset', 'Admin\UserController@reset');
	Route::auth();

	Route::get('/socialite/redirect/{provider}',  'Admin\SocialiteController@getSocialRedirect')->name('socialite.redirect');
	Route::get('/socialite/handle/{provider}',  'Admin\SocialiteController@getSocialHandle')->name('socialite.handle');

	Route::group(['middleware' => ['authweb'], 'roles'=>['ADMIN'], 'redirect'=>'/admin/login'], function () {

		Route::get('/', 'Admin\DashboardController@index')->name('admin.home');
		Route::get('/backtoprevious', 'CMSCore\Admin\BackController@back' )->name('admin.back');

		Route::get('/users/', function () {return redirect('admin/');} );
		Route::get('/user/{id?}', 'Admin\AdminController@details')->name('user');
		Route::post('/user/{id?}', 'Admin\AdminController@save' );

		Route::get('/cms/{product}/{subtype?}', 'CMSCore\Admin\CMSController@index');
		Route::get('/cms/details/{product}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@details');
		Route::post('/cms/details/{product}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@save');
		Route::get('/cms/delete/{product}/{subtype}/{id?}', 'CMSCore\Admin\CMSController@delete');

		Route::get('/orders/{status}/{customer}', 'Admin\OrderController@index')->name('orders');
		Route::get('/order/{id?}', 'Admin\OrderController@details')->name('order');
		Route::post('/order/{id?}', 'Admin\OrderController@save');
		Route::get('/order/delete/{id?}', 'Admin\OrderController@delete');


		CMSCore::CRUDRoute('product', 'products');
        CMSCore::CRUDRoute('item', 'items');
        CMSCore::CRUDRoute('customerdetail', 'customerdetails');
        CMSCore::CRUDRoute('guarantee', 'guarantees');


        Route::get('/guarantee/{guaranteeId?}/guaranteeitem/details/{guaranteeItemId?}', 'Admin\GuaranteeItemController@details')->name('admin.guaranteeitem-details');
        Route::post('/guarantee/{guaranteeId?}/guaranteeitem/{guaranteeItemId?}', 'Admin\GuaranteeItemController@save')->name('admin.guaranteeitem-save');
        Route::get('/guarantee/{guaranteeId?}/guaranteeitem/{guaranteeItemId?}', 'Admin\GuaranteeItemController@delete')->name('admin.guaranteeitem-delete');


        // CONTACT
        CMSCore::CRUDRoute('contact', 'contacts');

        // SETTING
        Route::get('/setting/{id?}', 'Admin\SettingController@details')->name('admin.setting');
        Route::post('/setting/{id?}', 'Admin\SettingController@save')->name('admin.setting.save');



        CMSCore::CRUDRoute('booking', 'bookings');

        CMSCore::CRUDRoute('blog', 'blogs');

        Route::get('/product/{productId?}/category/details/{categoryId?}', 'Admin\CategoryController@details')->name('admin.category-details');
        Route::post('/product/{productId?}/category/{categoryId?}', 'Admin\CategoryController@save')->name('admin.category-save');
        Route::get('/product/{productId?}/category/{categoryId?}', 'Admin\CategoryController@delete')->name('admin.category-delete');

	});
});

Route::group(['middleware' => ['authweb'], 'roles'=>['CUSTOMER', 'CUSTOMERBIZ'], 'redirect'=>'/login/page'], function () {


});


Route::get('/maintenance', 'Frontend\PageController@getMaintenance')->name('maintenance');
Route::get('/', 'Frontend\PageController@getHome')->name('home');
Route::get('/tentang-kami', 'Frontend\PageController@getAbout')->name('about');
Route::get('/kontak-kami', 'Frontend\PageController@getContact')->name('contact');
Route::post('/kontak-kami', 'Frontend\PageController@submitContact')->name('submitContact');

Route::get('/produk/{permalink?}', 'Frontend\ProductController@getProductCategory')->name('product-category');

Route::group(['prefix'=>'layanan'], function () {
    Route::get('/', 'Frontend\ServiceController@index')->name('service');
    Route::get('/reservasi', 'Frontend\ServiceController@getReservation')->name('service-reservation');
    Route::post('/reservasi/save', 'Frontend\ServiceController@saveReservation')->name('service-reservation-save');
});

Route::group(['prefix'=>'berita'], function () {
    Route::get('/', 'Frontend\NewsController@index')->name('news');
    Route::get('/detail/{permalink?}', 'Frontend\NewsController@getDetails')->name('news-details');
});








