<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Categories;

class CategoryController extends Controller
{

    protected $categories;

    public function __construct(Categories $categories)
    {
        $this->categories = $categories; 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categories->all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categories->all();
        return view('admin.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $input = $request->all();
        if($request->slug!=''){
            $input['slug'] = $request->slug;
        }else{
            $input['slug'] = $request->name;
        }
        $category = $this->categories->create($input);
        return redirect()->route('get.createIdCate.attribute',$category->id);
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

    public function editAjax(Request $request){
        if(\Request::ajax()){
            // $input = $request->all();
            $menu_id = \Request::get('menu_id');
            $menu_title = \Request::get('menu_title');
            $menu_link = \Request::get('menu_link');
            $menu_parent_id = \Request::get('menu_parent_id');
            $category = $this->categories->find($menu_id);
            $category['name'] = $menu_title;
            $category['parent_id'] = $menu_parent_id;
            if($menu_link!=''){
                $category['slug'] = $menu_link;
            }else{
                $category['slug'] = $category['name'];
            }
            if($category->update()){
                return "success";
            }else{
                return "errors";
            }
            // return $input;
        }
    }


    public function getDelete(){
        if(\Request::ajax()){
            $menu_id = \Request::get('menu_id');
            $parent_id = \Request::get('parent_id');
            $category = $this->categories->find($menu_id);
            if($category->delete()){
                $cate_parent = \App\Categories::where('parent_id', $category->id)->get();
                foreach($cate_parent as $item){
                    $item['parent_id'] = $category->parent_id;
                    $item->update();
                }
                return "success";
            }
        }
    }

    public function getAttribute()
    {
        return "thanh cong";
    }
}
