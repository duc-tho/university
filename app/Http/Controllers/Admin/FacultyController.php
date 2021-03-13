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
    public function show()
    {
        $data['facultylist'] = Faculty::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        return view('server.pages.faculty.show', $data);
    }
    public function create()
    {
        return view('server.pages.faculty.create');
    }
    public function store(AddFacultyRequest $request)
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
        $faculty->image = upload_file($request->img, 'dist/upload/image/faculty');
        $faculty->save();
        return back();
    }
    public function edit($id)
    {
        $data['faculty'] = Faculty::find($id);
        return view('server.pages.faculty.edit', $data);
    }
    public function update(EditFacultyRequest $request, $id)
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
        return redirect('admin/faculty');
    }
    public function delete($id)
    {
        Faculty::destroy($id);
        // return redirect()->back()->with(["toastrInfo" => ["type" => "success", "messenger" => "Xóa thành công"]]);
        return back();
    }
}
