<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddFacultyRequest;
use App\Http\Requests\EditFacultyRequest;
use App\Models\Faculty;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use function App\Providers\upload_file;

class FacultyController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $facultylist = Faculty::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        return view('server.pages.faculty.index', [
            'facultylist' => $facultylist,
            'khoa' => $khoa,
        ]);
    }
    public function create(Request $request, $khoa)
    {
        return view('server.pages.faculty.create', [
            'khoa' => $khoa,
        ]);
    }
    public function store(AddFacultyRequest $request, $khoa)
    {
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
        if ($request->hasFile('image')) $faculty['image'] = upload_file($request->file('image'), 'dist/upload/image/3/faculty');
        $faculty->save();
        return redirect()->route('admin.faculty.show', [$khoa['slug']]);
    }
    public function edit($id, Request $request, $khoa)
    {
        $faculty = Faculty::find($id);
        return view('server.pages.faculty.edit', [
            'faculty' => $faculty,
            'khoa' => $khoa,
        ]);
    }
    public function update(EditFacultyRequest $request, $id, $khoa)
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
            $arr['image'] = upload_file($request->img, 'dist/upload/image/faculty');
        }
        $faculty::where('id', $id)->update($arr);
        return redirect('admin/faculty', [$khoa['slug']]);
    }
    public function delete($id)
    {
        Faculty::destroy($id);
        return back();
    }
}
