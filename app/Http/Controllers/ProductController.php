<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
	protected $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

    public function index()
    {
    	return view('site.product.index1');
    }
}
