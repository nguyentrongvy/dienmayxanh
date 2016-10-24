<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Categories;
use App\Filter;
use App\ElementFilter;
use App\Company;
use App\Price;

class CategoriesController extends Controller
{
	// protected $product,$categories,$filter,$elementfilter,$company,$price;

	// public function __construct(Product $product,Categories $categories,Filter $filter,ElementFilter $elementfilter,Price $price,Company $company)
	// {
	// 	$this->product = $product;
	// 	$this->categories = $categories;
	// 	$this->filter = $filter;
	// 	$this->elementfilter = $elementfilter;
	// 	$this->price = $price;
	// 	$this->company = $company;
	// }
 //    public function index($id)
 //    {
 //    	$companys = \App\Company::where('cate_id',$id)->get();
 //    	$prices = \App\Price::where('cate_id',$id)->get();
 //    	$products = \App\Product::where('cate_id',$id)->get();
 //    	$filters = \App\Filter::where('cate_id',$id)->get();
 //    	return view('site.product.index1',compact('products','filters','companys','prices'));
 //    }
}
