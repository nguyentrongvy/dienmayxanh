<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categories;
use App\Filter;

class FilterController extends Controller
{

    protected $categories,$filter;

    public function __construct(Categories $categories,Filter $filter)
    {
        $this->categories = $categories;
        $this->filter = $filter;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categories->all();
        return view('admin.filter.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categories->all();
        return view('admin.filter.create',compact('categories'));
    }

    public function createId($id){
        $filters = \App\Filter::where('cate_id',$id)->get();
        $categories = $this->categories->find($id);
        return view('admin.filter.createId',compact('categories','filters'));
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
            $name = $request->name;
            $cate_id = $request->cate_id;
            $this->filter->create([
                'name' => $name,
                'cate_id' => $cate_id
            ]);
            return "Thành công";
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
        $categories = $this->categories->find($id);
        $filters = \App\Filter::where('cate_id',$categories->id)->get();
        return view('admin.filter.detail',compact('categories','filters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filter = $this->filter->find($id);
        return view('admin.filter.edit',compact('filter'));
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
        $filter = $this->filter->find($id);
        $input = $request->all();
        $filter->update($input);
        return "thanh cong";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filter = $this->filter->find($id);
        $filter->delete();
        return redirect()->route('filter.index');
    }
}
