<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categories;

class MainController extends Controller
{
	protected $categories;
	public function __construct(Categories $categories)
	{
		$this->categories = $categories;
	}

    public function index()
    {
    	// $categories = $this->categories->all();
    	return view('site.index');
    }
}
