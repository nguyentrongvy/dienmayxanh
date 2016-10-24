<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Specification;
use App\Categories;

class SpecifitionController extends Controller
{

    protected $specification,$categories;

    public function __construct(Specification $specification,Categories $categories)
    {
        $this->specification = $specification;
        $this->categories = $categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.specifitions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.specifitions.create');
    }

    public function createId($id)
    {
        $category = $this->categories->find($id);
        $specification = \App\Specification::where('cate_id',$id)->get();
        // $specifitions = $this->specification->all();
        // $cate_specifitions = \App\Cate_Spec::where('cate_id',$id)->get();
        // $array = array();
        // foreach($specifitions as $specifition)
        // {
        //     foreach($cate_specifitions as $cate_specifition){
        //         if($specifition->id == $cate_specifition->spec_id){
        //             $array[] = $specifition->id;
        //         }
        //     }
        // }
        return view('admin.specifitions.createId',compact('category','specification'));
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
            'name' => 'required|unique:specifications'
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
                $this->specification->create([
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
        $specifition = $this->specification->find($id);
        return view('admin.specifitions.edit',compact('specifition'));
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
        $input = $request->all();
        $specifitions = $this->specification->find($id);
        $specifitions->update($input);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specifition = $this->specification->find($id);
        $specifition->delete();
        return back();
    }

}
