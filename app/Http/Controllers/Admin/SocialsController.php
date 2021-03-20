<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Socials;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
            'status' => '1',
        ];

        $socials_list = Socials::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);
        return view('server.pages.socials.index', [
            'socials_list' =>  $socials_list,
            'khoa' => $khoa
        ]);
    }
    public function create($khoa)
    {
        return view('server.pages.socials.create', [
            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        $socials = new Socials($request->input());


        $request['status'] == "on" ? $socials['status'] = 1 : $socials['status'] = 0;

        $socials->save();
        
        return redirect()->route('admin.socials.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $socials = Socials::find($id);
        abort_if(!$socials, 404);

        return view('server.pages.socials.edit', [
            'socials' => $socials,
            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id)
    {

        $socials = Socials::find($id);


        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);


        $socials->update($request->input());


        // chuyển hướng về trang socials list
        return redirect()->route('admin.socials.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        $socials = Socials::find($id);


        Socials::destroy($socials['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.socials.show', [$khoa['slug']]);
    }
}
