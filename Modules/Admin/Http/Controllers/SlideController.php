<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    //
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
            
            'faculty_id' => $khoa['id']
        ];

        $slide_list = Slide::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);

        return view('server.pages.slide.index', [
            'slide_list' =>  $slide_list,
            'khoa' => $khoa
        ]);
    }
    public function create($khoa)
    {
        return view('server.pages.slide.create', [
            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $slide = new Slide($request->input());

        abort_if($slide['faculty_id'] != $khoa['id'], 403);

        $request['status'] == "on" ? $slide['status'] = 1 : $slide['status'] = 0;
        if ($request->file('link') != null) $slide['link'] = upload_file($request->file('link'), 'dist/upload/image/slide');

        $request->validate([
            'name' => 'required:slide,name,' . $slide->id
        ], [
            'name.required' => 'Chưa nhập tên slide nè!',
        ]);

        $slide->save();
        return redirect()->route('admin.slide.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $slide = Slide::find($id);

        abort_if(!$slide, 404);

        abort_if($slide['faculty_id'] != $khoa['id'], 403);

        return view('server.pages.slide.edit', [
            'slide' => $slide,
            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id)
    {

        $slide = Slide::find($id);

        abort_if(!$slide, 404);

        abort_if($slide['faculty_id'] != $khoa['id'], 403);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('link') != null) $request->merge(['link' => upload_file($request->file('link'), 'dist/upload/image/slide')]);

        $slide->update($request->input());

        $request->validate([
            'name' => 'required:slide,name,' . $slide->id
        ], [
            'name.required' => 'Chưa nhập tên slide nè!',
        ]);
        // chuyển hướng về trang teacher list
        return redirect()->route('admin.slide.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        $slide = Slide::find($id);

        abort_if(!$slide, 404);

        abort_if($slide['faculty_id'] != $khoa['id'], 403);

        Slide::destroy($slide['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.slide.show', [$khoa['slug']]);
    }
}
