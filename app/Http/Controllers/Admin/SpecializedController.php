<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialized;
use App\Models\Faculty;
use Illuminate\Http\Request;

class SpecializedController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $specialized_list = Specialized::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        $facultylist= Faculty::all();

        return view('server.pages.specialized.index', [
            'specialized_list' =>  $specialized_list,
            'facultylist' =>  $facultylist,
            'khoa' =>$khoa
        ]);
    }
    public function create($khoa)
    {
        $faculty_list = Faculty::all();
        return view('server.pages.specialized.create', [
            'faculty_list' =>  $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $specialized = new Specialized($request->input());
        $request['status'] == "on" ? $specialized['status'] = 1 : $teacher['status'] = 0;

        if ($request->file('image') != null) $specialized['image'] = upload_file($request->file('image'), 'dist/upload/image/specialized');

        if ($request->file('icons') != null) $specialized['icons'] = upload_file($request->file('icons'), 'dist/upload/image/icons');

        $request->validate([
            'name' => 'required:specialized,name,' . $specialized->id
        ], [
            'name.required' => 'Chưa nhập tên ngành nè!',
        ]);

        $specialized->save();
        return redirect()->route('admin.specialized.show', [$khoa['slug']]);
    }
    // public function edit(Request $request, $khoa, $id)
    // {
    //     $teacher = TeacherRepresentative::find($id);
    //     $faculty_list = Faculty::all();
    //     return view('server.pages.teacher.edit', [
    //         'teacher' => $teacher,
    //         'faculty_list' => $faculty_list,
    //         'khoa' => $khoa,
    //     ]);
    // }
    // public function update(EditTeacherRequest $request, $khoa, $id)
    // {

    //     $teacher = TeacherRepresentative::find($id);

    //     abort_if(!$teacher, 404);

    //     if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

    //     if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/teacher')]);

    //     $teacher->update($request->input());

    //     $request->validate([
    //         'name' => 'required|unique:teacher_representative,name,' . $teacher->id
    //     ], [
    //         'name.unique' => 'Tên giảng viên đã tồn tại, vui lòng nhập một tên khác...',
    //         'name.required' => 'Chưa nhập tên giảng viên nè!',
    //     ]);
    //     // chuyển hướng về trang teacher list
    //     return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    // }
    // public function delete($khoa, $id)
    // {
    //     TeacherRepresentative::find($id);
    //     TeacherRepresentative::destroy($id);
    //     // chuyển hướng về trang faculty list
    //     return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    // }
}
