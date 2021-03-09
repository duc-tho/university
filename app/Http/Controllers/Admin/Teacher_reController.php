<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\TeacherRepresentative;
use App\Http\Requests\AddTeacherRequest;
use App\Http\Requests\EditTeacherRequest;
use Illuminate\Http\Request; 

class Teacher_reController extends Controller
{
    public function getTeacher()
    {
        $data['teacherlist'] = TeacherRepresentative::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        $data['facultylist'] = Faculty::all();
        
        return view('server.pages.teacher.index',$data);
    }
    public function getAddTeacher()
    {
        $data['facultylist'] = Faculty::all();
        return view('server.pages.teacher.add_teacher',$data);
    }
    public function postAddTeacher(AddTeacherRequest $request)
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
        $teacher->image = upload_file($request->img,'dist/upload/image/teacher');
        $teacher->save();
        return back();
    }
    public function getEditTeacher($id)
    {
        $data['teacher'] = TeacherRepresentative::find($id);
        $data['list_faculty'] = Faculty::all();
        return view('server.pages.teacher.edit_teacher', $data);
    }
    public function postEditTeacher(EditTeacherRequest $request, $id)
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
            $arr['image'] = upload_file($request->img,'dist/upload/image/teacher');
        }
        $teacher::where('id', $id)->update($arr);
        // return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Lưu thành công"]]);
        return redirect('admin/teacher');
    }
    public function deleteTeacher($id)
    {
        TeacherRepresentative::destroy($id);
        // return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
        return back();
    }
    public function Appear($id){

    }
}
