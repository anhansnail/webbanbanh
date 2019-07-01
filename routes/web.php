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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Admin',function(){
	return view('Admin/Index/IndexAdmin');
	// return redirect('Admin/Users/DanhSach');
});
Route::group(['prefix'=>'Admin'],function(){

	//Group Users
	Route::group(['prefix'=>'Users'],function(){
		Route::get('DanhSach','UsersController@getDanhSach');
		Route::get('Them','UsersController@getThem');
		Route::post('Them','UsersController@postThem');	
		Route::get('Sua/{id}','UsersController@getSua');
		Route::post('Sua/{id}','UsersController@postSua');
		Route::get('Xoa/{id}','UsersController@Xoa');
				
	});

	//Slide
		
	Route::group(['prefix'=>'Slide'],function(){
		Route::get('DanhSach','SlideController@getDanhSach');
		Route::get('Them','SlideController@getThem');
		Route::post('Them','SlideController@postThem');	
		Route::get('Sua/{id}','SlideController@getSua');
		Route::post('Sua/{id}','SlideController@postSua');
		Route::get('Xoa/{id}','SlideController@Xoa');
				
	});

	//bills
		Route::group(['prefix'=>'Bills'],function(){
		Route::get('DanhSach','BillsController@getDanhSach');
		Route::get('Them','BillsController@getThem');
		Route::post('Them','BillsController@postThem');	
		Route::get('Sua/{id}','BillsController@getSua');
		Route::post('Sua/{id}','BillsController@postSua');
		Route::get('Xoa/{id}','BillsController@Xoa');
				
	});
	//custormer
			Route::group(['prefix'=>'Customer'],function(){
		Route::get('DanhSach','CustomerController@getDanhSach');
		Route::get('Them','CustomerController@getThem');
		Route::post('Them','CustomerController@postThem');	
		Route::get('Sua/{id}','CustomerController@getSua');
		Route::post('Sua/{id}','CustomerController@postSua');
		Route::get('Xoa/{id}','CustomerController@Xoa');
				
	});
	//news
				Route::group(['prefix'=>'News'],function(){
		Route::get('DanhSach','NewsController@getDanhSach');
		Route::get('Them','NewsController@getThem');
		Route::post('Them','NewsController@postThem');	
		Route::get('Sua/{id}','NewsController@getSua');
		Route::post('Sua/{id}','NewsController@postSua');
		Route::get('Xoa/{id}','NewsController@Xoa');
				
	});
	//Products
		Route::group(['prefix'=>'Products'],function(){
		Route::get('DanhSach','ProductsController@getDanhSach');
		Route::get('Them','ProductsController@getThem');
		Route::post('Them','ProductsController@postThem');	
		Route::get('Sua/{id}','ProductsController@getSua');
		Route::post('Sua/{id}','ProductsController@postSua');
		Route::get('Xoa/{id}','ProductsController@Xoa');
				
	});
	//CategoryProducts
			Route::group(['prefix'=>'CategoryProducts'],function(){
		Route::get('DanhSach','CategoryProductsController@getDanhSach');
		Route::get('Them','CategoryProductsController@getThem');
		Route::post('Them','CategoryProductsController@postThem');	
		Route::get('Sua/{id}','CategoryProductsController@getSua');
		Route::post('Sua/{id}','CategoryProductsController@postSua');
		Route::get('Xoa/{id}','CategoryProductsController@Xoa');
				
	});			

});

Route::get('HomeMA','HomeController@HomeMA');
// Home đã đăng nhập
// Route::get('nguoidung','LogInController@HomeUser');

Route::get('About','AboutController@About');
Route::get('Contact','ContactController@Contact');
Route::get('SignUp','SignUpController@SignUp');
Route::get('LogIn','LogInController@LogIn');
Route::post('LogIn','LogInController@postLogIn');

Route::get('LogOut','LogOutController@LogOut');

Route::get('Account','UsersController@Account');


Route::get('XemSanPham/{CP}/{P}','XemSanPhamController@getProducts');//xem sản phẩm khi chọn từ menu
Route::get('DanhSachSanPham/{idCategory}','ProductsController@getDanhSachSanPham');