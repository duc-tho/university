<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutCategory;
use App\Models\Faculty;


use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $about_list = AboutCategory::where(["status" => "1", "faculty_id" => $khoa['id']])->orderBy("id", "desc")->paginate(6);
        return view('server.pages.about.index', [
            'about_list' =>  $about_list,
            'khoa' => $khoa
        ]);
    }
    public function create($khoa)
    {
        return view('server.pages.about.create', [
            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $about = new AboutCategory($request->input());

        abort_if($about['faculty_id'] != $khoa['id'], 403);

        $request['status'] == "on" ? $about['status'] = 1 : $about['status'] = 0;
        if ($request->file('image') != null) $about['image'] = upload_file($request->file('image'), 'dist/upload/image/about');


        $about->save();
        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $about = AboutCategory::find($id);
        abort_if(!$about, 404);

        abort_if($about['faculty_id'] != $khoa['id'], 403);
        return view('server.pages.about.edit', [
            'about' => $about,
            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id)
    {

        $about = AboutCategory::find($id);

        abort_if(!$about, 404);

        abort_if($about['faculty_id'] != $khoa['id'], 403);



        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/about')]);

        $about->update($request->input());


        // chuyển hướng về trang about list
        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        $about = AboutCategory::find($id);

        abort_if(!$about, 404);

        abort_if($about['faculty_id'] != $khoa['id'], 403);

        AboutCategory::destroy($about['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }
}
