<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
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
    public function create(Request $request, $khoa)
    {
        return view('server.pages.menu.create', [
            'khoa' => $khoa
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
        $menu = new Menu($request->input());

        $menu['status'] = $menu['status'] == 'on' ? 1 : 0;

        $menu['faculty_id'] = $khoa['id'];

        $menu['display_order'] = $menu['display_order'] ? $menu['display_order'] : 0;;

        $menu->save();

        return redirect()->route('admin.menu.show', [$khoa['slug']]);
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

        $menus = Menu::where($query_condition)->paginate($item_per_page);

        return view('server.pages.menu.index', [
            'menus' => $menus,
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
        // Tìm menus
        $menu = Menu::find($id);

        // dừng nếu menu không tồn tại
        abort_if(!$menu, 404);

        // dừng lại nếu xóa menu có khoa khác với khoa của menu đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $menu['faculty_id'] != Auth::user()['faculty_id'], 403);

        return view('server.pages.menu.edit', [
            'menu' => $menu,
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
        // Tìm menus
        $menu = Menu::find($id);

        // dừng nếu menu không tồn tại
        abort_if(!$menu, 404);

        // dừng lại nếu xóa menu có khoa khác với khoa của menu đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $menu['faculty_id'] != Auth::user()['faculty_id'], 403);

        // chuyển status sang dạng 1, 0
        if ($request->filled('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        $request->merge(['faculty_id' => $khoa['id']]);

        if ($request->filled('display_order')) $request->merge(['display_order' => $request['display_order']]);
        else $request->merge(['display_order' => 0]);

        // Cập nhật lại thông tin menu
        $menu->update($request->input());

        // chuyển hướng về trang menu list
        return redirect()->route('admin.menu.show', [$khoa['slug']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($khoa, $id)
    {
        // Tìm menus
        $menu = Menu::find($id);

        // dừng nếu menu không tồn tại
        abort_if(!$menu, 404);

        // dừng lại nếu cập nhật menu có khoa khác với khoa của menu đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $menu['faculty_id'] != Auth::user()['faculty_id'], 403);

        // xóa menu
        Menu::destroy($id);

        // chuyển hướng về trang menu list
        return redirect()->route('admin.menu.show', [$khoa['slug']]);
    }
}
