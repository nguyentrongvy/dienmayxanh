<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Product;
use App\Cate_Spec; 
use App\Specification;
use App\Attribute;


class ProductController extends Controller
{
    protected $categories,$product,$cate_spec;

    public function __construct(Categories $categories, Product $product, Cate_Spec $cate_spec,Specification $specifition,Attribute $attribute)
    {
        $this->categories = $categories;
        $this->product = $product;
        $this->cate_spec = $cate_spec;
        $this->specifition = $specifition;
        $this->attribute = $attribute;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categories->all();
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $input = $request->all();
        if($request->slug!=''){
            $input['slug'] = $request->slug;
        }else
        {
            $input['slug'] = $request->name;
        }
        $input['properties'] = "";
        $this->product->create($input);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->product->find($id);
        $categories = $this->categories->all();
        return view('admin.product.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = $this->product->find($id);
        $input = $request->all();
        if($request->image!=''){
            $input['image']=$request->image;
        }else{
            $input['image'] = $product->image;
        }
        if($request->slug!='')
        {
            $input['slug'] = $request->slug;
        }else{
            $input['slug'] = $product->slug;
        }
        $product->update($input);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);
        $product->delete();
        return redirect()->route('product.index');
    }

    public function getSpecifition($id)
    {   
        $product = $this->product->find($id);
        $specifications = \App\Specification::where('cate_id',$product['cate_id'])->get();
        return view('admin.product.createSpecifition',compact('specifications'));
    }

    public function getAttribute($id)
    {
        $product = $this->product->find($id);
        $category = $this->categories->find($product['cate_id']);
        $attributes = \App\Attribute::where('cate_id',$category->id)->get();
        return view('admin.product.attribute',compact('category','attributes','product'));
    }

    public function postAttribute(Request $request)
    {
        if($request->ajax()){
            $values = $request->values;
            $product_id = $request->product_id;
            $product=$this->product->find($product_id);
            $product['properties'] = $values;
            $product->update();
            return $product;
        }
    }
    public function listAttribute($id)
    {
        $products = $this->product->all();
        $product = $this->product->find($id);
        $properties = $product['properties'];
        $propertiesJson = json_encode($properties);
        // dd($properties);
        return view('admin.product.editAttribute',compact('properties','product','products'));
    }

    public function postListAttribute(Request $request)
    {
        if($request->ajax()){
            $values = $request->values;
            $product_id = $request->product_id;
            $product = $this->product->find($product_id);
            $product['properties'] = $values;
            $product->update();
            return "Ok";
        }
    }

    public function deleteAttribute(Request $request)
    {
        if($request->ajax()){
            $properties = $request->properties;
            $id_product = $request->product_id;
            $product = $this->product->find($id_product);
            $product['properties'] = $properties;
            $p=$product->update();
            return $p['properties'];
        }
    }
}
