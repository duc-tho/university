<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddFacultyRequest;
use App\Http\Requests\EditFacultyRequest;
use App\Models\Faculty;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



class FacultyController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $facultylist = Faculty::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        return view('server.pages.faculty.index', [
            'facultylist' => $facultylist,
            'khoa' => $khoa,
        ]);
    }
    public function create(Request $request, $khoa)
    {
        return view('server.pages.faculty.create', [
            'khoa' => $khoa,
        ]);
    }
    public function store(AddFacultyRequest $request, $khoa)
    {
        $faculty = new Faculty($request->input());

        $request['status'] == "on" ? $faculty['status'] = 1 : $faculty['status'] = 0;

        if ($request->file('image') != null) $faculty['image'] = upload_file($request->file('image'), 'dist/upload/image/faculty');

        $request->validate([
            'name' => 'required|unique:faculty,name,' . $faculty->id
        ], [
            'name.unique' => 'Tên Khoa đã tồn tại, vui lòng nhập một tên khác...',
            'name.required' => 'Chưa nhập tên khoa nè!',
        ]);

        $request->validate([
            'slug' => 'required|unique:faculty,slug,' . $faculty->id
        ], [
            'slug.unique' => 'Slug đã tồn tại, vui lòng nhập một tên khác...',
            'slug.required' => 'Chưa nhập Slug nè!',
        ]);

        $request->validate([
            'meta_keywords' => 'required|unique:faculty,meta_keywords,' . $faculty->id
        ], [
            'meta_keywords.unique' => 'Meta_Keywords đã tồn tại, vui lòng nhập một tên khác...',
            'meta_keywords.required' => 'Chưa nhập meta_keywords nè!',
        ]);

        $request->validate([
            'meta_descriptions' => 'required|unique:faculty,meta_descriptions,' . $faculty->id
        ], [
            'meta_descriptions.unique' => 'Meta_Descriptions đã tồn tại, vui lòng nhập một tên khác...',
            'meta_descriptions.required' => 'Chưa nhập meta_descriptions nè!',
        ]);

        $faculty->save();

        return redirect()->route('admin.faculty.show', [$khoa['slug']]);
    }
    public function edit( Request $request, $khoa, $id)
    {
        $faculty = Faculty::find($id);
        return view('server.pages.faculty.edit', [
            'faculty' => $faculty,
            'khoa' => $khoa,
        ]);
    }
    public function update(EditFacultyRequest $request, $khoa, $id )
    {
        $faculty = Faculty::find($id);

        abort_if(!$faculty, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/faculty')]);

        $faculty->update($request->input());

        $request->validate([
            'name' => 'required|unique:faculty,name,' . $faculty->id
        ], [
            'name.unique' => 'Tên Khoa đã tồn tại, vui lòng nhập một tên khác...',
            'name.required' => 'Chưa nhập tên khoa nè!',
        ]);

        $request->validate([
            'slug' => 'required|unique:faculty,slug,' . $faculty->id
        ], [
            'slug.unique' => 'Slug đã tồn tại, vui lòng nhập một tên khác...',
            'slug.required' => 'Chưa nhập Slug nè!',
        ]);

        $request->validate([
            'meta_keywords' => 'required|unique:faculty,meta_keywords,' . $faculty->id
        ], [
            'meta_keywords.unique' => 'Meta_Keywords đã tồn tại, vui lòng nhập một tên khác...',
            'meta_keywords.required' => 'Chưa nhập meta_keywords nè!',
        ]);

        $request->validate([
            'meta_descriptions' => 'required|unique:faculty,meta_descriptions,' . $faculty->id
        ], [
            'meta_descriptions.unique' => 'Meta_Descriptions đã tồn tại, vui lòng nhập một tên khác...',
            'meta_descriptions.required' => 'Chưa nhập meta_descriptions nè!',
        ]);

        // chuyển hướng về trang user list
        return redirect()->route('admin.faculty.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        Faculty::find($id);
        Faculty::destroy($id);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.faculty.show', [$khoa['slug']]);
    }
}
