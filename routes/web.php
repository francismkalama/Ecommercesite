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

Route::get('/register', function () {
    return view('auth/register
		');
});
// Route::get('/password/reset', function () {
//     return view('auth/password/reset'
// );
// });

Route::get('/index', 'CategoryController@showCategdropdown');
Auth::routes();

Route::get('/','CategoryController@showCategdropdown');
Route::get('/contact', 'HomeController@contactus');

Route::get('/admin/home', [
	'as'=>'admin.home',
   'uses' => 'HomeController@adminhome'
]);

Route::get('/vendor/sell', [
	'as'=>'vendor.sell',
   'uses' => 'VendorController@vendorsellpage'
]);



//Route::get('/admin/category', 'CategoryController@showAll');

Route::group(['prefix' => 'admin'], function(){

Route::get('/category', function(){
	return view('admin/categoryadd');
});

Route::get('/view_orders', 'ProductController@getCustomerordersAdmin'); 

Route::post('/addproduct', [
	'uses'=>'ProductController@addProduct',
	'middleware' => 'auth'

]);

Route::get('/product/edit/{id}', 'ProductController@editProduct');

Route::get('/addproduct', 'ProductController@index');

Route::post('/addcategory', 'CategoryController@store');

Route::get('/addcategory', 'CategoryController@index');

Route::get('/view_category', 
	[
		'as'=>'admin.viewcateg',
		'uses'=>'CategoryController@showAll'
]);

Route::get('/category/edit/{id}', 'CategoryController@editCategoryform');

Route::post('/category/edit/{id}', [
	'as'=>'category.update',
	'uses'=>'CategoryController@updateCategory'
]);


Route::post('/category/delete/{id?}', 'CategoryController@deleteCategory');

Route::get('/viewproducts', ['as'=>'admin.view','uses'=>'ProductController@viewProducts']);

Route::get('/view_customers', 'CustomerController@viewCustomers');

Route::get('/manage_customer', 'CustomerController@index');

Route::get('/vieworder', 'ProductController@viewOrders');

Route::get('/change_password', 'HomeController@adminshowpasswordchangeform');

});
Route::get('/all_products',[
'as'=>'shop.empty',
'uses'=> 'ProductController@viewAllProducts'
]);
Route::get('customer/product/checkedout',[
'as'=>'product.checkedout',
'uses'=> 'ProductController@productchecked'
]);
Route::get('/customerhome',[
	'as'=>'',
	'uses'=>'CategoryController@showCategdropdown'

]);
Route::get('/customer/view_products', 'ProductController@viewAllProducts');
Route::get('/customer/checkout', 'ProductController@getCheckout');

Route::get('add-to-cart/{categ}/{id}', [  
    'as'=>'product.addtocart',
    'uses'=>'ProductController@getAddToCart'
	]);

Route::get('customer/shopping_cart', [
	'as'=>'product.shopingcart',
 'uses'=>'ProductController@getCart'
 ]);

Route::get('admin/product/edit/{id}', [
	'as'=>'product.getupdate',
 'uses'=>'ProductController@editProduct'
 ]);


Route::get('product/checkout', [
	'as'=>'product.checkout',
 'uses'=>'ProductController@checkOutProduct'
 ]);
Route::get('customer/checkout', [
	'as'=>'checkedout.checkout',
 'uses'=>'ProductController@getCheckout'
 ]);

Route::get('customer/checkout/compdelivery', [
	'as'=>'checkedout.checkout',
 'uses'=>'ProductController@getCheckoutcompdelivery'
 ]);

Route::get('customer/change_password', 'HomeController@showpasswordchangeform');
// Route::get('customer/checkedOutconfirmation', [
// 	'as'=>'checkedout.failed',
//  'uses'=>'ProductController@checkedOutconfirmation'
//  ]);

Route::post('customer/checkout', [
	'as'=>'product.checkout',
 'uses'=>'ProductController@postcheckOutProduct'
 ]);

Route::post('customer/checkout/compdelivery', [
	'as'=>'product.checkout.delivered',
 'uses'=>'ProductController@postcheckOutdelivered'
 ]);

Route::post('change_password', [
	'as'=>'change.Password',
 'uses'=>'ProductController@postcheckOutProduct'
 ]);

Route::put('admin/product/edit/{id}', [
	'as'=>'product.update',
 'uses'=>'ProductController@updateProduct'
 ]);

 	
// }
Route::post('/changepassword',[
	'as' => 'change.Password',
	'uses' => 'HomeController@changePassword'

]);
Route::get('/change_password', 'HomeController@showpasswordchangeform');

Route::get('/customer/product/index','HomeController@index');

Route::get('/aboutus', 'HomeController@aboutUs');

Route::get('customer/view_products/categ/{id}', 'ProductController@customerviewProducts');

Route::get('/shoppingcart/reduceby/{id}', 'ProductController@getreducedCartByOne');
Route::get('/shoppingcart/reduceall/{id}', 'ProductController@getreducedCartbyAll');

Route::get('/category_view/dskcomps/{id}', 'ProductController@viewProductbyCategory');

Route::get('customer/tobedeliveredbox', function(){
	return view('customers/deliverycart');
});

Route::post('vendor/vendoraddproduct', [
	'uses'=>'VendorController@addPostProduct',
	'middleware' => 'auth'

]);
Route::post('vendor/product/edit/{id}', 'ProductController@vendordeleteproduct');
Route::get('vendor/home', 'VendorController@index');





