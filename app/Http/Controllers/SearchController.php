<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use DB;

class SearchController extends Controller
{
	protected $product;

	public function __construct(Product $product)
	{
		$this->product=$product;
	}

    public function search(Request $request)
    {
    	if($request->ajax())
    	{
    		$output="";
    		$products = DB::table('products')->where('slug','LIKE','%'.$request->search.'%')->get();
    		if($products)
    		{
    			foreach($products as $key => $product)
    			{
    				$output.='<tr>'.
    						'<td>'.$product->id.'</td>'.
    						'<td>'.$product->name.'</td>'.
    						'<td>'.$product->price.'</td>'.
    						'</tr>';
    			}
    			return Response($output);
    		}
    	}
    }

    public function searchManuFilter(Request $request)
    {
        if($request->ajax())
        {
            $search = $request->search;
            $products = \App\Product::where('slug','LIKE','%'.$search.'%')->get();
            if($products){
               return $products;
            }
        }
    }

    public function searchPrice(Request $request)
    {
        if($request->ajax())
        {
            $price_min = $request->price_min;
            $price_max = $request->price_max;
            $products = \App\Product::where('price','>=',$price_min)
                                    ->where('price','<=', $price_max)->get();
            if($products)
            {
                return $products;
            }
        }
    }

    public function doSearch(Request $request)
    {
        if($request->ajax())
        {
            $prices = $request->prices;
            $manufactures = $request->manufactures;

           
        }
    }
}
