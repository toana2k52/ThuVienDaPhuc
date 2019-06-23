<?php

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
//
// Route::get('/', function () {
//     return view('User\UserController@index');
// });

//User
Route::group(['prefix'=>'user','namespace'=>'User'],function(){
	Route::get('/trang-chu','UserController@index')->name('user.index');
	Route::get('/gioi-thieu','UserController@about')->name('user.about');
	Route::get('/lien-he','UserController@contact')->name('user.contact');
	Route::get('/san-pham','ProductController@index')->name('user.product');
	Route::get('/chi-tiet-san-pham/{slug}','ProductController@product_detail')->name('user.product_detail');

	Route::get('/san-pham-theo-danh-muc/{slug}','ProductController@pro_cats')->name('user.product_category');
	Route::get('/san-pham-theo-thuong-hieu/{slug}','ProductController@pro_brands')->name('user.product_brand');
	Route::post('/tim-kiem','ProductController@pro_find')->name('user.product_find');


	Route::get('san-pham-xap-xep/{arr}','ProductController@pro_arr')->name('user.product_arr');
	Route::post('san-pham-theo-gia','ProductController@pro_price')->name('user.product_price');

	Route::get('gio-hang','CartController@index')->name('user.cart');
	Route::post('them-gio-hang/{id}','CartController@post_add_cart_user')->name('user.cart_add');
	Route::post('chinh-sua-so-luong-gio-hang/{id}','CartController@update_cart_user')->name('user.update-cart_user');
	Route::get('xoa-gio-hang/{id}','CartController@delete_cart_user')->name('user.delete-cart_user');

	Route::get('thanh-toan','OrderController@index')->name('user.order');
	Route::Post('thanh-toan-don-hang','OrderController@add_order_detail_user')->name('user.order_2');
});

//Admin
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){

	Route::get('muon-sach','AdminController@index')->name('admin.index');
	Route::get('/muon-sach/{id}','AdminController@index_user')->name('admin.index_user');
	Route::get('tra-sach','AdminController@pay')->name('admin.pay');
	Route::get('/tra-sach/{id}','AdminController@pay_user')->name('admin.pay_user');

	Route::get('/them-moi-nhan-vien','AdminController@register')->name('admin.register');
	Route::post('/them-moi-nhan-vien','AdminController@post_register')->name('admin.register');

	//Brand
	Route::get('thuong-hieu','BrandController@index')->name('admin.brand');
	Route::get('them-moi-thuong-hieu','BrandController@add')->name('admin.brand_add');
	Route::post('them-moi-thuong-hieu','BrandController@post_add')->name('admin.brand_add');
	Route::get('chinh-sua-thuong-hieu/{id}','BrandController@edit')->name('admin.brand_edit');
	Route::post('chinh-sua-thuong-hieu/{id}','BrandController@post_edit')->name('admin.brand_edit');
	Route::get('xoa-thuong-hieu/{id}','BrandController@delete')->name('admin.brand_delete');

	//category
	Route::get('danh-muc','CategoryController@index')->name('admin.category');
	Route::get('them-danh-muc','CategoryController@add')->name('admin.category_add');
	Route::post('them-danh-muc','CategoryController@post_add')->name('admin.category_add');
	Route::get('chinh-sua-danh-muc/{id}','CategoryController@edit')->name('admin.category_edit');
	Route::post('chinh-sua-danh-muc/{id}','CategoryController@post_edit')->name('admin.category_edit');
	Route::get('xoa-danh-muc/{id}','CategoryController@delete')->name('admin.category_delete');

	//member
	Route::get('nhan-vien','AdminController@index_member')->name('admin.member');
	Route::get('chinh-sua-nhan-vien/{id}','AdminController@edit')->name('admin.member_edit');
	Route::post('chinh-sua-nhan-vien/{id}','AdminController@edit')->name('admin.member_edit');
	Route::get('xoa-nhan-vien/{id}','AdminController@delete')->name('admin.member_delete');

	Route::get('reset_password','AdminController@reset_password')->name('reset_password');
	Route::post('reset_password','AdminController@post_reset_password')->name('reset_password');

	//info
	Route::get('thong-tin-ca-nhan','AdminController@index_info')->name('admin.info');
	Route::get('vo-hieu-hoa-tai-khoan/{id}','AdminController@lock_acc')->name('admin.lock_acc');
	Route::post('chinh-sua-thong-tin/{id}','AdminController@edit_info')->name('admin.member_edit_info');

	//product
	Route::get('san-pham','ProductController@index')->name('admin.product');
	Route::get('them-moi-san-pham','ProductController@add')->name('admin.product_add');
	Route::post('them-moi-san-pham','ProductController@post_add')->name('admin.product_add');

	Route::get('them-moi-hinh-anh-san-pham/{id}','ProductController@add_image')->name('admin.product_image_add');
	Route::post('them-moi-hinh-anh-san-pham/{id}','ProductController@post_add_image')->name('admin.product_image_add');

	Route::get('xoa-anh-san-pham/{id}','ProductController@delete_image')->name('admin.product_delete_image');
	Route::get('trang-thai-anh-san-pham/{id}/{status}','ProductController@status_image')->name('admin.product_status_image');

	Route::get('chi-tiet-san-pham/{id}','ProductController@info')->name('admin.product_info');

		//edit
	Route::get('chinh-sua-san-pham/{id}/{check}','ProductController@edit')->name('admin.product_edit');
	Route::post('chinh-sua-san-pham/{id}/{check}','ProductController@edit')->name('admin.product_edit');

	Route::get('san-pham-delete-image/{id}','ProductController@delete_image')->name('admin.product-delete-image');
		//delete
	Route::get('xoa-san-pham/{id}','ProductController@delete')->name('admin.product_delete');

	Route::get('san-pham-delete-detail/{id}','ProductController@delete_detail')->name('admin.product-delete-detail');

	Route::get('don-hang-admin','OrderController@index')->name('admin.order');
	Route::get('quan-ly-don-hang-admin/{order_id}','OrderController@index_order_detail')->name('admin.order_detail');
	Route::post('chinh-sua-don-hang-admin/{id}','OrderController@post_edit')->name('admin.order_edit');
});

// login-logout
	Route::get('admin/dang-nhap','Admin\AdminController@login')->name('login');
	Route::post('admin/dang-nhap','Admin\AdminController@post_login')->name('login');
	Route::get('admin/dang-xuat','Admin\AdminController@logout')->name('logout');
//endlogin-logout