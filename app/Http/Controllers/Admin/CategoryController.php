<?php

namespace App\Http\Controllers\Admin;
use App\Models\Faculty;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory()
    {
        // $data['facultylist'] = Faculty::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        return view('server.pages.category.index');
    }
    public function getAddCategory()
    {
        $data['category_list']=Category::all();
        $data['facultylist']=Faculty::all();
        return view('server.pages.category.add_category', $data);
    }
    // public function postAddFaculty(AddFacultyRequest $request)
    // {
    //     $faculty = new Faculty();
    //     $faculty->name = $request->name;
    //     $faculty->slug = str::slug($request->slug);
    //     $faculty->meta_keywords = $request->keywords;
    //     $faculty->meta_descriptions = $request->descriptions;
    //     $faculty->intro_summary = $request->summary;
    //     $faculty->intro = $request->introdution;
    //     $faculty->layout_name = $request->layout_name;
    //     $faculty->layout_page = $request->layout_page;
    //     $faculty->created_by = $request->created_by;
    //     $faculty->updated_by = $request->updated_by;
    //     $faculty->status = $request->status;
    //     $faculty->image = upload_file($request->img,'dist/upload/image/faculty');
    //     $faculty->save();
    //     return back();
    // }
}
