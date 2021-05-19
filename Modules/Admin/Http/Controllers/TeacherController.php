<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\TeacherRepresentative;
use Modules\Admin\Http\Requests\AddTeacherRequest;
use Modules\Admin\Http\Requests\EditTeacherRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [

            'faculty_id' => $khoa['id']
        ];

        $teacher_list = TeacherRepresentative::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);
        return view('server.pages.teacher.index', [
            'teacher_list' =>  $teacher_list,
            'khoa' => $khoa
        ]);
    }
    public function create($khoa)
    {

        return view('server.pages.teacher.create', [
            'khoa' => $khoa,
        ]);
    }
    public function store(AddTeacherRequest $request, $khoa)
    {
        $teacher = new TeacherRepresentative($request->input());
        abort_if($teacher['faculty_id'] != $khoa['id'], 403);
        $request['status'] == "on" ? $teacher['status'] = 1 : $teacher['status'] = 0;
        if ($request->file('image') != null) $teacher['image'] = upload_file($request->file('image'), 'dist/upload/image/teacher');

        $request->validate([
            'name' => 'required:teacher_representative,name,' . $teacher->id
        ], [

            'name.required' => 'Chưa nhập tên giảng viên nè!',
        ]);

        $teacher->save();
        return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $teacher = TeacherRepresentative::find($id);

        abort_if(!$teacher, 404);

        abort_if($teacher['faculty_id'] != $khoa['id'], 403);
        return view('server.pages.teacher.edit', [
            'teacher' => $teacher,

            'khoa' => $khoa,
        ]);
    }
    public function update(EditTeacherRequest $request, $khoa, $id)
    {

        $teacher = TeacherRepresentative::find($id);


        abort_if(!$teacher, 404);

        abort_if($teacher['faculty_id'] != $khoa['id'], 403);


        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/teacher')]);

        $teacher->update($request->input());

        $request->validate([
            'name' => 'required:teacher_representative,name,' . $teacher->id
        ], [

            'name.required' => 'Chưa nhập tên giảng viên nè!',
        ]);
        // chuyển hướng về trang teacher list
        return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        $teacher = TeacherRepresentative::find($id);

        abort_if(!$teacher, 404);

        abort_if($teacher['faculty_id'] != $khoa['id'], 403);

        TeacherRepresentative::destroy($teacher['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    }
}
