<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageCategoryController extends Controller
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
    public function create($khoa)
    {
        $image_categorys = ImageCategory::where(['parent_id' => 0])->get();

        return view('server.pages.image_category.create', [
            'khoa' => $khoa,
            'image_categorys' => $image_categorys
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
        $image_category = new ImageCategory($request->input());

        $image_category['status'] = $image_category['status'] == 'on' ? 1 : 0;

        $image_category->save();

        return redirect()->route('admin.image_category.show', [$khoa['slug']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
            'faculty_id' => $khoa['id']
        ];

        $image_categorys = ImageCategory::where($query_condition)->paginate($item_per_page);

        return view('server.pages.image_category.index', [
            'image_categorys' => $image_categorys,
            'khoa' => $khoa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($khoa, $id)
    {
        // Tìm image_category
        $image_category = ImageCategory::find($id);

        // dừng nếu image_category không tồn tại
        abort_if(!$image_category, 404);

        // dừng lại nếu xóa image_category có khoa khác với khoa của image_category đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $image_category['faculty_id'] != Auth::user()['faculty_id'], 403);

        $image_categorys = ImageCategory::where(['parent_id' => 0])->get();

        return view('server.pages.image_category.edit', [
            'image_categorys' => $image_categorys,
            'image_category' => $image_category,
            'khoa' => $khoa
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
        // Tìm image_category
        $image_category = ImageCategory::find($id);

        // dừng nếu image_category không tồn tại
        abort_if(!$image_category, 404);

        // dừng lại nếu xóa image_category có khoa khác với khoa của image_category đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $image_category['faculty_id'] != Auth::user()['faculty_id'], 403);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        // Cập nhật lại thông tin image_category
        $image_category->update($request->input());

        // chuyển hướng về trang image_category list
        return redirect()->route('admin.image_category.show', [$khoa['slug']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($khoa, $id)
    {
        // Tìm image_category
        $image_category = ImageCategory::find($id);

        // dừng nếu image_category không tồn tại
        abort_if(!$image_category, 404);

        // dừng lại nếu cập nhật image_category có khoa khác với khoa của image_category đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $image_category['faculty_id'] != Auth::user()['faculty_id'], 403);

        // xóa image_category
        ImageCategory::destroy($id);

        // chuyển hướng về trang image_category list
        return redirect()->route('admin.image_category.show', [$khoa['slug']]);
    }
}
