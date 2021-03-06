<?php 


Route::group(['namespace'=>'Laramaster\Nuclues\Http\Controllers\admin','prefix'=>'admin'],function(){
	Route::resource('/product/category','CategoryController');
	Route::resource('/currency','CurrencyController');
	Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
	Route::get('/category/delete/{slug}','CategoryController@delete')->name('admin.category.destroy');
	Route::get('/product/delete/{slug}','ProductController@delete')->name('product.delete');
	Route::get('/currency/delete/{slug}','CurrencyController@delete')->name('admin.currency.destroy');
	Route::resource('/product','ProductController');
	Route::get('product/like/{id}','ProductController@like')->name('product.like');
	Route::get('product/dislike/{id}','ProductController@dislike')->name('product.dislike');
	Route::resource('/navigation','NavigrationController');
	Route::get('/navigation/delete/{slug}','NavigrationController@delete')->name('admin.navigation.destroy');
	Route::get('/menu/{id}','MenuController@index')->name('menu.index');
	Route::post('/menu/store','MenuController@store')->name('menu.store');
	Route::get('/menu/delete/{id}','MenuController@delete')->name('admin.menu.delete');
	Route::get('product/subcategory/{id}','SubCategoryController@index')->name('subcategory.index');
	Route::post('product/subcategory/store','SubCategoryController@store')->name('subcategory.store');
	Route::get('product/subcategory/delete/{id}','SubCategoryController@delete')->name('admin.subcategory.delete');
	Route::get('category/get','CategoryController@get');
	Route::resource('/blog/blogcategory','BlogCategoryController');
	Route::get('blog/blogcategory/delete/{id}','BlogCategoryController@delete')->name('admin.blogcategory.destroy');
	Route::resource('/blog','BlogController');
	Route::get('blog/delete/{id}','BlogController@delete')->name('blog.delete');

	Route::get('/contact','ContactController@index')->name('contact.index');
	Route::get('contact/delete/{id}','ContactController@delete')->name('contact.delete');
	Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
	Route::get('subscriber/delete/{id}','SubscriberController@delete')->name('subscriber.delete');

	Route::resource('page','pagesController');
	Route::resource('order','OrderController');

	Route::get('order/payment/{id}','OrderController@payment_status')->name('order.payment_status');
	Route::get('order/payment/approved/{id}','OrderController@payment_approved')->name('order.payment_approved');
	Route::get('order/delivery/{id}','OrderController@delivery_status')->name('order.delivery_status');
	Route::get('order/delivery/approved/{id}','OrderController@delivery_approved')->name('order.delivery_approved');

	Route::get('page/delete/{id}','PagesController@delete')->name('page.delete');
	Route::get('order/delete/{id}','OrderController@delete')->name('order.delete');

	Route::get('/customer','CustomerController@index')->name('customer.index');
	Route::get('customer/delete/{id}','CustomerController@delete')->name('customer.delete');

	Route::resource('/coupon','CouponController');
	Route::get('/coupon/delete/{id}','CouponController@delete')->name('coupon.delete');

	Route::post('coupon','CouponController@store')->name('admin.coupon.store');

	Route::get('/user','UserSettingsController@edit')->name('user.edit');
	Route::put('/user/{id}','UserSettingsController@update')->name('user.update');

	Route::get('/site','SiteSettingsController@edit')->name('site.edit');
	Route::post('/site','SiteSettingsController@store')->name('site.store');
	Route::put('/site/{id}','SiteSettingsController@update')->name('site.update');

	Route::resource('/slider','SliderController');

	Route::get('/slider/delete/{id}','SliderController@delete')->name('slider.delete');

	Route::resource('/widget','WidgetController');

	Route::get('/widget/delete/{id}','WidgetController@delete')->name('widget.delete');

});








		