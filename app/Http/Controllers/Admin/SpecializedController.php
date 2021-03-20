<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialized;
use App\Models\Faculty;
use Illuminate\Http\Request;

class SpecializedController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
            'status' => '1',
            'faculty_id' => $khoa['id']
        ];

        $specialized_list = Specialized::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);

        return view('server.pages.specialized.index', [
            'specialized_list' =>  $specialized_list,
            'khoa' =>$khoa
        ]);
    }
    public function create($khoa)
    {

        return view('server.pages.specialized.create', [

            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $specialized = new Specialized($request->input());

        abort_if($specialized['faculty_id'] != $khoa['id'], 403);

        $request['status'] == "on" ? $specialized['status'] = 1 : $teacher['status'] = 0;

        if ($request->file('image') != null) $specialized['image'] = upload_file($request->file('image'), 'dist/upload/image/specialized');

        if ($request->file('icons') != null) $specialized['icons'] = upload_file($request->file('icons'), 'dist/upload/image/specialized');

        $specialized->save();
        return redirect()->route('admin.specialized.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $specialized = Specialized::find($id);

        abort_if(!$specialized, 404);

        abort_if($specialized['faculty_id'] != $khoa['id'], 403);

        return view('server.pages.specialized.edit', [
            'specialized' => $specialized,

            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id)
    {

        $specialized = Specialized::find($id);

        abort_if(!$specialized, 404);

        abort_if($specialized['faculty_id'] != $khoa['id'], 403);


        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/specialized')]);
        if ($request->file('icons') != null) $specialized['icons'] = upload_file($request->file('icons'), 'dist/upload/image/specialized');
        $specialized->update($request->input());

        $request->validate([
            'name' => 'required:specialized,name,' . $specialized->id
        ], [
            'name.required' => 'Chưa nhập tên giảng viên nè!',
        ]);
        // chuyển hướng về trang teacher list
        return redirect()->route('admin.specialized.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        $specialized = Specialized::find($id);

        abort_if(!$specialized, 404);

        abort_if($specialized['faculty_id'] != $khoa['id'], 403);

        Specialized::destroy($specialized['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.specialized.show', [$khoa['slug']]);
    }
}
