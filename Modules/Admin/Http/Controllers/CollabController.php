<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CollabLogo;
use Illuminate\Http\Request;

class CollabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [];

        $collab_list = CollabLogo::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);
        return view('server.pages.collab.index', [
            'collab_list' =>  $collab_list,
            'khoa' => $khoa
        ]);
    }

    public function create($khoa)
    {
        return view('server.pages.collab.create', [
            'khoa' => $khoa,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $khoa)
    {
        $collab = new CollabLogo($request->input());


        $request['status'] == "on" ? $collab['status'] = 1 : $collab['status'] = 0;
        if ($request->file('image_url') != null) $collab['image_url'] = upload_file($request->file('image_url'), 'dist/upload/image/collab');


        $collab->save();
        return redirect()->route('admin.collab.show', [$khoa['slug']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $khoa, $id)
    {
        $collab = CollabLogo::find($id);
        abort_if(!$collab, 404);

        return view('server.pages.collab.edit', [
            'collab' => $collab,
            'khoa' => $khoa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $khoa, $id)
    {
        $collab = CollabLogo::find($id);

        abort_if(!$collab, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image_url') != null) $request->merge(['image_url' => upload_file($request->file('image_url'), 'dist/upload/image/collab')]);

        $collab->update($request->input());

        // chuyển hướng về trang collab list
        return redirect()->route('admin.collab.show', [$khoa['slug']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($khoa, $id)
    {
        $collab = CollabLogo::find($id);

        abort_if(!$collab, 404);


        CollabLogo::destroy($collab['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.collab.show', [$khoa['slug']]);
    }
}
