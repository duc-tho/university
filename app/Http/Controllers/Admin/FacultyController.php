<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddFacultyRequest;
use App\Http\Requests\EditFacultyRequest;
use App\Models\Faculty;
use Illuminate\Http\Request;



class FacultyController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [

            'id' => $khoa['id']
        ];

        $faculty_list = Faculty::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);
        return view('server.pages.faculty.index', [
            'faculty_list' => $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function create(Request $request, $khoa)
    {
        $layout_path = base_path() . '\resources\views\client\layout\\';

        $layout_dir = glob($layout_path . 'layout_*', GLOB_ONLYDIR | GLOB_NOSORT);

        foreach ($layout_dir as $key => $dir) {
            $layout_dir[$key] = str_replace($layout_path, '', $dir);
        }

        return view('server.pages.faculty.create', [
            'khoa' => $khoa,
            'layout_list' => $layout_dir
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
    public function edit(Request $request, $khoa, $id)
    {
        $faculty = Faculty::find($id);
        return view('server.pages.faculty.edit', [
            'faculty' => $faculty,
            'khoa' => $khoa,
        ]);
    }
    public function update(EditFacultyRequest $request, $khoa, $id)
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
        $faculty = Faculty::find($id);

        abort_if(!$faculty, 404);

        abort_if($faculty['id'] != $khoa['id'], 403);

        Faculty::destroy($faculty['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.faculty.show', [$khoa['slug']]);
    }
}
