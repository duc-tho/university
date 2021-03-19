<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentRepresentative;
use App\Models\Faculty;

class StudentController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $student_list = StudentRepresentative::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        $faculty_list= Faculty::all();

        return view('server.pages.student.index', [
            'student_list' =>  $student_list,
            'faculty_list' =>  $faculty_list,
            'khoa' =>$khoa
        ]);
    }
    public function create($khoa)
    {
        $faculty_list = Faculty::all();
        return view('server.pages.student.create', [
            'faculty_list' =>  $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $student = new StudentRepresentative($request->input());
        $request['status'] == "on" ? $student['status'] = 1 : $student['status'] = 0;
        if ($request->file('image') != null) $student['image'] = upload_file($request->file('image'), 'dist/upload/image/student');

        $request->validate([
            'name' => 'required:student_representative,name,' . $student->id
        ], [
            'name.required' => 'Chưa nhập tên sinh viên nè!',
        ]);

        $student->save();
        return redirect()->route('admin.student.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $student = StudentRepresentative::find($id);
        $faculty_list = Faculty::all();
        return view('server.pages.student.edit', [
            'student' => $student,
            'faculty_list' => $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id)
    {

        $student = StudentRepresentative::find($id);

        abort_if(!$student, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/student')]);

        $student->update($request->input());

        $request->validate([
            'name' => 'required:student_representative,name,' . $student->id
        ], [
            'name.required' => 'Chưa nhập tên sinh viên nè!',
        ]);
        // chuyển hướng về trang teacher list
        return redirect()->route('admin.student.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        StudentRepresentative::find($id);
        StudentRepresentative::destroy($id);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.student.show', [$khoa['slug']]);
    }
}