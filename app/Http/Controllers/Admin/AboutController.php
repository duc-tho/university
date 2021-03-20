<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutCategory;
use App\Models\Faculty;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $about_list = AboutCategory::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        $facultylist= Faculty::all();

        return view('server.pages.about.index', [
            'about_list' =>  $about_list,
            'facultylist' =>  $facultylist,
            'khoa' =>$khoa
        ]);
    }
    public function create($khoa)
    {
        $faculty_list = Faculty::all();
        return view('server.pages.about.create', [
            'faculty_list' =>  $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $about = new AboutCategory($request->input());
        $request['status'] == "on" ? $about['status'] = 1 : $about['status'] = 0;
        if ($request->file('image') != null) $about['image'] = upload_file($request->file('image'), 'dist/upload/image/about');

        $request->validate([
            'name' => 'required:about_category,name,' . $about->id
        ], [
            'name.required' => 'Chưa nhập tiêu đề giới thiệu nè!',
        ]);

        $about->save();
        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $about = AboutCategory::find($id);
        $faculty_list = Faculty::all();
        return view('server.pages.about.edit', [
            'about' => $about,
            'faculty_list' => $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id)
    {

        $about = AboutCategory::find($id);

        abort_if(!$about, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/about')]);

        $about->update($request->input());

        $request->validate([
            'name' => 'required:about_category,name,' . $about->id
        ], [

            'name.required' => 'Chưa nhập tiêu đề giới thiệu nè!',
        ]);
        // chuyển hướng về trang about list
        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        AboutCategory::find($id);
        AboutCategory::destroy($id);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }
}
