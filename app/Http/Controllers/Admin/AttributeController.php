<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attribute;
use App\Categories;


class AttributeController extends Controller
{
    protected $attribute,$categories;

    public function __construct(Attribute $attribute,Categories $categories)
    {
        $this->attribute = $attribute;
        $this->categories = $categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attribute.create');
    }

    public function createId($id)
    {
        $category = $this->categories->find($id);
        $attributes = \App\Attribute::where('cate_id',$id)->get();
        return view('admin.attribute.create',compact('category','attributes'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator  = \Validator::make($request->all(),[
            'name' => 'required|unique:attribute'
        ]);

        if($validator->fails())
        {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()
            ],200);   
        }else{
            if($request->ajax())
            {
                $name = $request->name;
                $cate_id = $request->cate_id;
                $this->attribute->create([
                    'name' => $name,
                    'cate_id' => $cate_id
                ]);
                return "Ok";
            }
        }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attribute = $this->attribute->find($id);
        $attribute->delete();
        return "thanh cong";
    }
}
