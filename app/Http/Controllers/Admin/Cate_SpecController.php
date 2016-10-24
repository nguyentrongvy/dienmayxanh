<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate_Spec;

class Cate_SpecController extends Controller
{
    protected $category_specifition;

    public function __construct(Cate_Spec $category_specifition)
    {
        $this->category_specifition = $category_specifition;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            $valueInsert = $request->valueInsert;
            $cate_id = $request->cate_id;
            $valueDelete = $request->valueDelete;
            if($valueInsert){
                $this->category_specifition->create([
                    'cate_id' => $cate_id,
                    'spec_id' => $valueInsert
                ]);
            }
            if($valueDelete){
                $cateSpecDelete = \App\Cate_Spec::where('spec_id',$valueDelete);
                $cateSpecDelete->delete();
            }
            return 'Ok';
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
        //
    }
}
