<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Filter;
use App\ElementFilter;

class ElementFilterController extends Controller
{

    protected $filter,$elementfilter;

    public function __construct(Filter $filter,ElementFilter $elementfilter)
    {
        $this->filter = $filter;
        $this->elementfilter = $elementfilter;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $filter = $this->filter->all();
        return view('admin.elementfilter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filter = $this->filter->all();
        return view('admin.elementfilter.create',compact('filter'));
    }

    public function createId($id)
    {
        $elementFilters = \App\ElementFilter::where('search_id',$id)->get();
        $filter = $this->filter->find($id);
        return view('admin.elementfilter.createId',compact('filter','elementFilters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $this->elementfilter->create($input);
        return "thanh cong";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filters = $this->filter->find($id);
        $elementfilters = \App\ElementFilter::where('search_id',$id)->get();
        return view('admin.elementfilter.detail',compact('elementfilters','filters'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elementfilters = $this->elementfilter->find($id);
        return view('admin.elementfilter.edit',compact('elementfilters'));
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
        $elementFilter = $this->elementfilter->find($id);
        $elementFilter->update($input);
        return redirect()->route('get.create.elementfilter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elementFilter = $this->elementfilter->find($id);
        $elementfilter->delete();
        return redirect()->route('get.create.elementfilter');
    }
}
