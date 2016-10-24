<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Specification;
use App\elementSpecification;

class ElementSpecifitionController extends Controller
{

    protected $categories, $specification, $elementspecification;

    public function __construct(Categories $categories,Specification $specification,elementSpecification $elementspecification)
    {
        $this->categories = $categories;
        $this->specification = $specification;
        $this->elementspecification = $elementspecification;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function createId($id)
    {
        $specification = $this->specification->find($id);
        $elementspecifications = \App\elementSpecification::where('spec_id',$id)->get();
        return view('admin.element-specifition.createId',compact('specification','elementspecifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|unique:spec_element'
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
                $spec_id = $request->spec_id;
                $this->elementspecification->create([
                    'name' => $name,
                    'spec_id' => $spec_id
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
        $element_spec_categorys = $this->elementspecification->find($id);
        $element_spec_categorys->delete();
        return back();
    }
}
