<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\ImageCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
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
        $image_category = ImageCategory::where(['parent_id' => 0, 'faculty_id' => $khoa['id']])->get();

        return view('server.pages.image.create', [
            'khoa' => $khoa,
            'image_category' => $image_category
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
        $image = new Image($request->input());

        $image['status'] = $image['status'] == 'on' ? 1 : 0;

        if ($request->file('image') != null) {
            $image['image'] = upload_file($request->file('image'), 'dist/upload/image/image');
        }

        $image->save();

        return redirect()->route('admin.image.show', [$khoa['slug'], 'category' => $image['image_category_id']]);
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

        $selected_category = null;
        if ($request->has('category')) $selected_category = $request->query('category');

        $image_category_list = ImageCategory::where([['parent_id', '!=', 0], 'faculty_id' => $khoa['id']])->get();

        $image_category = null;
        if ($selected_category) {
            $image_category = ImageCategory::find($selected_category);

            abort_if(!$image_category, 404);
        }

        return view('server.pages.Image.index', [
            'image_category_list' => $image_category_list,
            'item_per_page' => $item_per_page,
            'image_category' => $image_category,
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
        // Tìm image
        $image = image::find($id);

        // dừng nếu image không tồn tại
        abort_if(!$image, 404);

        // dừng lại nếu xóa image có khoa khác với khoa của image đang login trừ admin
        // abort_if(!Auth::user()['isAdmin'] && $image['faculty_id'] != Auth::user()['faculty_id'], 403);

        $image_category = ImageCategory::where(['parent_id' => 0, 'faculty_id' => $khoa['id']])->get();

        return view('server.pages.Image.edit', [
            'image_category' => $image_category,
            'image' => $image,
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
        // Tìm Image
        $image = Image::find($id);

        // dừng nếu Image không tồn tại
        abort_if(!$image, 404);

        // dừng lại nếu xóa Image có khoa khác với khoa của Image đang login trừ admin
        // abort_if(!Auth::user()['isAdmin'] && $image['faculty_id'] != Auth::user()['faculty_id'], 403);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) {
            $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/image')]);
        }

        // Cập nhật lại thông tin Image
        $image->update($request->input());

        // chuyển hướng về trang Image list
        return redirect()->route('admin.image.show', [$khoa['slug'], 'category' => $image['image_category_id']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($khoa, $id)
    {
        // Tìm Image
        $image = Image::find($id);

        $image_category_id = $image['image_category_id'];

        // dừng nếu image không tồn tại
        abort_if(!$image, 404);

        // dừng lại nếu cập nhật image có khoa khác với khoa của image đang login trừ admin
        // abort_if(!Auth::user()['isAdmin'] && $image['faculty_id'] != Auth::user()['faculty_id'], 403);

        // xóa image
        Image::destroy($id);

        // chuyển hướng về trang image list
        return redirect()->route('admin.image.show', [$khoa['slug'], 'category' => $image_category_id]);
    }
}
