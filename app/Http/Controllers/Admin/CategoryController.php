<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Faculty;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use Illuminate\Http\Request;
use Prophecy\Call\Call;

class CategoryController extends Controller
{
    //
    public function getCategory()
    {
        # code...
    
        // return view('server.pages.slide.index');
        $data['categoryList'] = Category::Where(["status"=>"1"])->orderBy('display_order','desc')->paginate(10);
        $data['faculityslide']=Faculty::all();
         return view('server.pages.categories.index',$data);
    }

    public function getAddCategory(){
        $data['faculityslide']=Faculty::all();
        return view('server.pages.categories.add_category',$data);
    }
    public function postAddCategory(AddCategoryRequest $request){
        $category=new Category();
        $category->faculty_id = $request->faculty_id;
        $category->name = $request->name;
        $category->display_order = $request->display_order;
        
        $category->browser_target = $request->browser_target;
        $category->description = $request->description;
        $category->created_by = $request->created_by;
        $category->updated_by = $request->updated_by;
        $category->status = $request->status;
        $category->link = upload_file($request->img,'dist/upload/image/category');
        $category->save();

        return back();
    }

    public function postEditCategory(EditCategoryRequest $request,$id){
        $category = new Category();
        $arr['name']= $request->name;
        $arr['display_order']=$request->display_order;
        
        $arr['browser_target']=$request->browser_target;
        $arr['description']=$request->description;
        $arr['created_by']=$request->created_by;
        $arr['updated_by']=$request->updated_by;
        $arr['status']=$request->status;
        if ($request->hasFile('img')) {
            $arr['link'] = upload_file($request->img,'dist/upload/image/category');
        }
        $category::where('id', $id)->update($arr);
        return redirect('admin/category');
    }

    public function getEditCategory($id){
        $data['category'] = Category::find($id);
        $data['list_faculty'] = Faculty::all();
        return view('server.pages.categories.edit_category', $data);
    }
    public function deleteCategory($id){
        Category::destroy($id);
        return back();
    }
}
