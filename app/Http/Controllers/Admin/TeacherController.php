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
        $facultylist = Faculty::all();
        return view('server.pages.teacher.create', [
            'facultylist' =>  $facultylist,
            'khoa' => $khoa,
        ]);
    }
    public function store(AddTeacherRequest $request, $khoa)
    {
        // $filename = $request->img->getClientOriginalName();
        $teacher = new TeacherRepresentative();
        $teacher->faculty_id = $request->faculty_id;
        $teacher->name = $request->name;
        $teacher->intro = $request->intro;
        $teacher->evaluate = $request->evaluate;
        $teacher->created_by = $request->created_by;
        $teacher->updated_by = $request->updated_by;
        $teacher->status = $request->status;
        $teacher->image = upload_file($request->img, 'dist/upload/image/3/teacher');
        $teacher->save();
        return redirect()->route('admin.teacher.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $teacher = TeacherRepresentative::find($id);
        $list_faculty = Faculty::all();
        return view('server.pages.teacher.edit', [
            'teacher' => $teacher,
            'list_faculty' => $list_faculty,
            'khoa' => $khoa,
        ]);
    }
    public function update(EditTeacherRequest $request, $khoa, $id)
    {
        $teacher = new TeacherRepresentative();
        $arr['name'] = $request->name;
        $arr['faculty_id'] = $request->faculty_id;
        $arr['evaluate'] = $request->evaluate;
        $arr['status'] = $request->status;
        $arr['created_by'] = $request->created_by;
        $arr['updated_by'] = $request->updated_by;
        $arr['intro'] = $request->intro;
        if ($request->hasFile('img')) {
            $arr['image'] = upload_file($request->img, 'dist/upload/image/3/teacher');
        }
        $teacher::where('id', $id)->update($arr);
        // return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Lưu thành công"]]);
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
