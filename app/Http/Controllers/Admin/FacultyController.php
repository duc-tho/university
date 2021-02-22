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
    public function getFaculty()
    {
        $data['facultylist'] = Faculty::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        return view('server.pages.faculty.index',$data);
    }
    public function getAddFaculty()
    {
        return view('server.pages.faculty.add_faculty');
    }
    public function postAddFaculty(AddFacultyRequest $request)
    {
        $filename = $request->img->getClientOriginalName();
        $faculty = new Faculty();
        $faculty->name = $request->name;
        $faculty->slug = str::slug($request->slug);
        $faculty->meta_keywords = $request->keywords;
        $faculty->meta_descriptions = $request->descriptions;
        $faculty->intro_summary = $request->summary;
        $faculty->intro = $request->introdution;
        $faculty->layout_name = $request->layout_name;
        $faculty->layout_page = $request->layout_page;
        $faculty->created_by = $request->created_by;
        $faculty->updated_by = $request->updated_by;
        $faculty->status = $request->status;
        $faculty->image = $filename;
        $request->img->storeAs('public/dist/upload/image/faculty', $filename);
        $faculty->save();
        return back();
    }
    public function getEditFaculty($id)
    {
        $data['faculty'] = Faculty::find($id);
        return view('server.pages.faculty.edit_faculty', $data);
    }
    public function postEditFaculty(EditFacultyRequest $request, $id)
    {
        $faculty = new Faculty();
        $arr['name'] = $request->name;
        $arr['slug'] = str::slug($request->slug);
        $arr['meta_keywords'] = $request->keywords;
        $arr['meta_descriptions'] = $request->descriptions;
        $arr['layout_name'] = $request->layout_name;
        $arr['layout_page'] = $request->layout_page;
        $arr['status'] = $request->status;
        $arr['created_by'] = $request->created_by;
        $arr['updated_by'] = $request->updated_by;
        $arr['intro_summary'] = $request->summary;
        $arr['intro'] = $request->introdution;
        if ($request->hasFile('img')) {
            $img = $request->img->getClientOriginalName();
            $arr['image'] = $img;
            $request->img->storeAs('public/dist/upload/image/faculty', $img);
        }
        $faculty::where('id', $id)->update($arr);
        // return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Lưu thành công"]]);
        return redirect('admin/faculty');
    }
    public function deleteFaculty($id)
    {
        Faculty::destroy($id);
        // return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
        return back();
    }
}
