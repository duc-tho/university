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
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
            'status' => '1',
            'faculty_id' => $khoa['id']
        ];

        $student_list = StudentRepresentative::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);
        return view('server.pages.student.index', [
            'student_list' =>  $student_list,
            'khoa' =>$khoa
        ]);
    }
    public function create($khoa)
    {
        return view('server.pages.student.create', [

            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $student = new StudentRepresentative($request->input());

        abort_if($student['faculty_id'] != $khoa['id'], 403);

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

        abort_if(!$student, 404);

        abort_if($student['faculty_id'] != $khoa['id'], 403);

        return view('server.pages.student.edit', [
            'student' => $student,

            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id)
    {

        $student = StudentRepresentative::find($id);

        abort_if(!$student, 404);

        abort_if($student['faculty_id'] != $khoa['id'], 403);

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
        $student = StudentRepresentative::find($id);

        abort_if(!$student, 404);

        abort_if($student['faculty_id'] != $khoa['id'], 403);

        StudentRepresentative::destroy($student['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.student.show', [$khoa['slug']]);
    }
}
