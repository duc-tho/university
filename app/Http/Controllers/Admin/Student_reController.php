<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentRepresentative;
use App\Models\Faculty;
use App\Http\Requests\AddStudentRequest;
use App\Http\Requests\EditStudentRequest;

class Student_reController extends Controller
{
    //
    public function getStudent(){
        $data['studentlist']=StudentRepresentative::where(["status"=>"1"])->orderBy("id","desc")->get();
        $data['facultylist']=Faculty::all();
        return view('server.pages.student.index',$data);
    }
    public function getAddStudent(){
        $data['facultylist']=Faculty::all();
        return view('server.pages.student.add_student',$data);
    }
    public function postAddStudent(AddStudentRequest $request){
        $student = new StudentRepresentative();
        $student->faculty_id=$request->faculty_id;
        $student->name = $request->name;
        $student->intro = $request->intro;
        $student->evaluate = $request->evaluate;
        $student->created_by = $request->created_by;
        $student->updated_by = $request->updated_by;
        $student->status = $request->status;
        $student->image = upload_file($request->img,'dist/upload/image/student');
        $student->save();
        return back();
    }
    public function getEditStudent($id){
        $data['student'] = StudentRepresentative::find($id);
        $data['list_faculty'] = Faculty::all();
        return view('server.pages.student.edit_student', $data);
    }
    public function postEditStudent(EditStudentRequest $request,$id){
        $student = new StudentRepresentative();
        $arr['name'] = $request->name;
        $arr['faculty_id'] = $request->faculty_id;
        $arr['evaluate'] = $request->evaluate;
        $arr['status'] = $request->status;
        $arr['created_by'] = $request->created_by;
        $arr['updated_by'] = $request->updated_by;
        $arr['intro'] = $request->intro;
        if ($request->hasFile('img')) {
            $arr['image'] = upload_file($request->img,'dist/upload/image/student');
        }
        $student::where('id', $id)->update($arr);
        // return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Lưu thành công"]]);
        return redirect('admin/student');
    }
    public function deleteStudent($id){
        StudentRepresentative::destroy($id);
        // return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
        return back();
    }
}

