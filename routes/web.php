<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('site.index');
// });

Route::get('/', ['as' => 'get.index','uses' => 'MainController@index']);

Route::get('/index', 'HomeController@index1');

Route::group(['prefix' => 'admin'],function(){
	Route::get('/login',['as' => 'get.admin.login','uses' => 'Admin\Auth\AdminController@getLogin']);
	Route::post('/login',['as' => 'post.admin.login','uses' => 'Admin\Auth\AdminController@postLogin']);
	// Route::get('/password/reset',['as' => 'get.resetpassword','uses' => 'Admin\Auth\ForgetPasswordController@showLinkRequestForm']);
	// Route::post('/password/reset',['as' => 'post.resetpassword','uses' => 'Admin\Auth\ResetPasswordController@reset']);
	// Route::post('/password/email',['as' => 'post.sendmail','uses' => 'Admin\Auth\ForgetPasswordController@sendResetLinkEmail']);
	// Route::get('/password/reset/{token}',['as' => 'get.show.form','uses' => 'Admin\Auth\ResetPasswordController@showResetForm']);
		Route::group(['middleware' => 'admin'],function(){

			Route::get('/index',['as' => 'admin.index','uses' => 'Admin\MainController@index']);

			Route::resource('/category','Admin\CategoryController');
			Route::get('/category/attribute',['as' => 'get.attribute','uses' => 'Admin\CategoryController@getAttribute']);

			Route::post('/edit-category',['as' => 'post.edit.category','uses' => 'Admin\CategoryController@editAjax']);
			
			Route::post('/delete-category',['as' => 'post.delete.category','uses' => 'Admin\CategoryController@getDelete']);

			Route::resource('/product','Admin\ProductController');
			Route::get('/product-specifition/{id}',['as' => 'get.product.specifition','uses' => 'Admin\ProductController@getSpecifition']);
			Route::get('/product/{id}/attribute',['as' => 'get.product.attribute','uses' => 'Admin\ProductController@getAttribute']);
			Route::post('/product/attribute',['as' => 'post.product.attribute','uses' => 'Admin\ProductController@postAttribute']);
			Route::get('/product/{id}/list-attribute',['as' => 'get.product.listAttribute','uses' => 'Admin\ProductController@listAttribute']);
			Route::post('/product/list-attribute',['as' => 'post.product.listAttribute','uses' => 'Admin\ProductController@postListAttribute']);
			// Route::DELETE('/product/delete/{id}-{id_product}',['as' => 'product.delete.attribute','uses' => 'Admin\ProductController@deleteAttribute']);
			Route::post('/product/delete',['as' => 'product.delete.attribute','uses' => 'Admin\ProductController@deleteAttribute']);

			Route::resource('/search','Admin\SearchController');
			Route::get('/search/create/{id}',['as' => 'get.create.search','uses' => 'Admin\SearchController@createId']);

			Route::resource('/checkbox','Admin\CheckboxController');

			Route::resource('/filter','Admin\FilterController');
			Route::get('/filter/create/{id}',['as' => 'get.create.filter','uses' => 'Admin\FilterController@createId']);

			Route::resource('/filters','Admin\FiltersController');

			Route::resource('/elementfilter','Admin\ElementFilterController');
			Route::get('/elementfilter/create/{id}',['as' => 'get.create.elementfilter','uses' => 'Admin\ElementFilterController@createId']);

			Route::resource('/company','Admin\CompanyController');

			Route::resource('/price','Admin\PriceController');

			Route::resource('/specifition','Admin\SpecifitionController');
			Route::get('specifition/create/{id}',['as' => 'get.create.specifition','uses' => 'Admin\SpecifitionController@createId']);

			Route::resource('/element-specifition','Admin\ElementSpecifitionController');

			Route::get('element-specifition/create/{id}',['as' => 'get.create.element.spec','uses' =>'Admin\ElementSpecifitionController@createId']);

			Route::resource('/category-specifition','Admin\Cate_SpecController');

			Route::resource('/attribute','Admin\AttributeController');
			Route::get('/attribute/{id}/create',['as' => 'get.createIdCate.attribute','uses' => 'Admin\AttributeController@createId']);
		});	
});

// Route::get('/ca',['as' => 'get.list.product','uses' => 'ProductController@index']);

Route::get('/category/{id}',['as' => 'get.list.product','uses' => 'CategoriesController@index']);

Route::get('/product',['as' => 'get.product','uses' => 'ProductController@index']);

Route::get('/search',['as' => 'get.search','uses' => 'SearchController@search']);

Route::get('/searchManuFilter',['as' => 'get.search.manuFilter','uses' => 'SearchController@searchManuFilter']);

Route::get('/searchPrice',['as' => 'get.search.Price','uses' => 'SearchController@searchPrice']);



// Auth::routes();

// Route::get('/home', 'HomeController@index');
