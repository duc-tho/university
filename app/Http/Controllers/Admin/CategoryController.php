<?php

namespace App\Http\Controllers\Admin;
use App\Models\Faculty;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $facultylist = Faculty::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        $categorylist = Category::where(["status" => "1"])->orderBy("id", "desc")->paginate(500);

        return view('server.pages.category.index',[
            'khoa' => $khoa,
            'facultylist' => $facultylist,
            'categorylist' => $categorylist
        ]);
    }
    public function create(Request $request, $khoa)
    {
        $category_list = Category::all();
        $facultylist = Faculty::all();
        return view('server.pages.category.create',
        [
            'khoa' => $khoa,
            'category_list' => $category_list,
            'facultylist' => $facultylist,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $category = new Category();
        $category->faculty_id = $request->faculty_id;
        $category->parent_id = $request->parent_id;
        $category->title = $request->title;
        $category->slug = str::slug($request->slug);
        $category->meta_descriptions = $request->meta_descriptions;
        $category->meta_keywords = $request->meta_keywords;
        $category->show_at_news = $request->show_at_news;
        $category->show_at_home = $request->show_at_home;
        $category->show_at_notification = $request->show_at_notification;
        $category->display_order = $request->display_order;
        $category->created_by = $request->created_by;
        $category->updated_by = $request->updated_by;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('admin.category.show', [$khoa['slug']]);
    }

    public function edit( Request $request, $khoa, $id)
    {
        $facultylist = Faculty::all();
        $category_list = Category::all();
        $category = Category::find($id);
        return view('server.pages.category.edit', [
            'category' => $category,
            'facultylist' => $facultylist,
            'category_list' => $category_list,
            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id )
    {
        $category = new Category();
        $arr['faculty_id'] = $request->faculty_id;
        $arr['parent_id'] = $request->parent_id;
        $arr['title'] = $request->title;
        $arr['slug'] = str::slug($request->slug);
        $arr['meta_keywords'] = $request->keywords;
        $arr['meta_descriptions'] = $request->descriptions;
        $arr['show_at_news'] = $request->show_at_news;
        $arr['show_at_home'] = $request->show_at_home;
        $arr['show_at_notification'] = $request->show_at_notification;
        $arr['display_order'] = $request->display_order;
        $arr['created_by'] = $request->created_by;
        $arr['updated_by'] = $request->updated_by;
        $arr['status'] = $request->status;
        $category::where('id', $id)->update($arr);
        return redirect()->route('admin.category.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        Category::find($id);
        Category::destroy($id);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.category.show', [$khoa['slug']]);
    }
}
