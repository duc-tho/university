<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\TeacherRepresentative;
use App\Http\Requests\AddTeacherRequest;
use App\Http\Requests\EditTeacherRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $teacherlist = TeacherRepresentative::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        $facultylist= Faculty::all();

        return view('server.pages.teacher.index', [
            'teacherlist' =>  $teacherlist,
            'facultylist' =>  $facultylist,
            'khoa' =>$khoa
        ]);
    }
    public function create($khoa)
    {
        $faculty_list = Faculty::all();
        return view('server.pages.teacher.create', [
            'faculty_list' =>  $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function store(AddTeacherRequest $request, $khoa)
    {
        $teacher = new TeacherRepresentative($request->input());
        $request['status'] == "on" ? $teacher['status'] = 1 : $teacher['status'] = 0;
        if ($request->file('image') != null) $teacher['image'] = upload_file($request->file('image'), 'dist/upload/image/teacher');

        $request->validate([
            'name' => 'required|unique:teacher_representative,name,' . $teacher->id
        ], [
            'name.unique' => 'Tên giảng viên đã tồn tại, vui lòng nhập một tên khác...',
            'name.required' => 'Chưa nhập tên giảng viên nè!',
        ]);

        $teacher->save();
        return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $teacher = TeacherRepresentative::find($id);
        $faculty_list = Faculty::all();
        return view('server.pages.teacher.edit', [
            'teacher' => $teacher,
            'faculty_list' => $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function update(EditTeacherRequest $request, $khoa, $id)
    {

        $teacher = TeacherRepresentative::find($id);

        abort_if(!$teacher, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/teacher')]);

        $teacher->update($request->input());

        $request->validate([
            'name' => 'required|unique:teacher_representative,name,' . $teacher->id
        ], [
            'name.unique' => 'Tên giảng viên đã tồn tại, vui lòng nhập một tên khác...',
            'name.required' => 'Chưa nhập tên giảng viên nè!',
        ]);
        // chuyển hướng về trang teacher list
        return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        TeacherRepresentative::find($id);
        TeacherRepresentative::destroy($id);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    }
}
