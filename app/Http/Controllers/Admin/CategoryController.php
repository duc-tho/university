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
        // $postData = Category::find($id);

        $faculty_list = Faculty::all();
        $category_list = Category::all();
        return view('server.pages.category.create',
        [
            'khoa' => $khoa,
            'category_list' => $category_list,
            'faculty_list' => $faculty_list,
            // 'categorylist' => $categorylist,
        ]);
    }
    public function store(Request $request, $khoa)
    {

        $category = new Category($request->input());

        $request['status'] == "on" ? $category['status'] = 1 : $category['status'] = 0;
        $request['display_order'] == "on" ? $category['display_order'] = 1 : $category['display_order'] = 0;
        $request['show_at_notification'] == "on" ? $category['show_at_notification'] = 1 : $category['show_at_notification'] = 0;
        $request['show_at_news'] == "on" ? $category['show_at_news'] = 1 : $category['show_at_news'] = 0;
        $request['show_at_home'] == "on" ? $category['show_at_home'] = 1 : $category['show_at_home'] = 0;

        if ($request->file('image') != null) $category['image'] = upload_file($request->file('image'), 'dist/upload/image/category');

        $request->validate([
            'faculty_id' => 'required:category,faculty_id,' . $category->id
        ], [
            'faculty_id.required' => 'Chưa chọn Khoa nè!',
        ]);

        $request->validate([
            'parent_id' => 'required:category,parent_id,' . $category->id
        ], [
            'parent_id.required' => 'Chưa chọn Danh Mục nè!',
        ]);

        $request->validate([
            'meta_descriptions' => 'required|unique:category,meta_descriptions,' . $category->id
        ], [
            'meta_descriptions.required' => 'Chưa nhập Meta_Descriptions nè!',
            'meta_descriptions.unique' => 'Meta_Descriptions đã tôn tại, vui lòng nhập một tên khác !',
        ]);
        $request->validate([
            'meta_keywords' => 'required|unique:category,meta_keywords,' . $category->id
        ], [
            'meta_keywords.required' => 'Chưa nhập Meta_Keywords nè!',
            'meta_keywords.unique' => 'Meta_Keywords đã tôn tại, vui lòng nhập một tên khác !',
        ]);


        $category->save();

        return redirect()->route('admin.category.show', [$khoa['slug']]);
    }

    public function edit( Request $request, $khoa, $id)
    {
        $faculty_list = Faculty::all();
        $category_list = Category::all();
        $category = Category::find($id);
        return view('server.pages.category.edit', [
            'category' => $category,
            'faculty_list' => $faculty_list,
            'category_list' => $category_list,
            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id )
    {
        $category = Category::find($id);

        abort_if(!$category, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/teacher')]);

        $category->update($request->input());

        $request->validate([
            'title' => 'required:category,title,' . $category->id
        ], [
            'title.required' => 'Chưa nhập tên danh mục nè!',
        ]);

        $request->validate([
            'meta_keywords' => 'required:category,meta_keywords,' . $category->id
        ], [
            'meta_keywords.required' => 'Chưa nhập meta_keyword nè!',
        ]);

        $request->validate([
            'meta_descriptions' => 'required:category,meta_descriptions,' . $category->id
        ], [
            'meta_descriptions.required' => 'Chưa nhập meta_descriptions nè!',
        ]);

        return redirect()->route('admin.category.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        Category::find($id);
        Category::destroy($id);
        return redirect()->route('admin.category.show', [$khoa['slug']]);
    }
}
