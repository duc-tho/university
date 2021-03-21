<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statistics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatisticController extends Controller
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
        return view('server.pages.statistics.create', [
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
        $statistic = new Statistics($request->input());

        $statistic->save();

        return redirect()->route('admin.statistic.show', [$khoa['slug']]);
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

        $statistics = Statistics::where($query_condition)->paginate($item_per_page);

        return view('server.pages.statistics.index', [
            'statistics' => $statistics,
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
        // Tìm statistic
        $statistic = Statistics::find($id);

        // dừng nếu statistics không tồn tại
        abort_if(!$statistic, 404);

        // dừng lại nếu xóa statistics có khoa khác với khoa của statistics đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $statistic['faculty_id'] != Auth::user()['faculty_id'], 403);

        return view('server.pages.statistics.edit', [
            'statistic' => $statistic,
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
        // Tìm statistics
        $statistic = Statistics::find($id);

        // dừng nếu statistic không tồn tại
        abort_if(!$statistic, 404);

        // dừng lại nếu xóa statistic có khoa khác với khoa của statistic đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $statistic['faculty_id'] != Auth::user()['faculty_id'], 403);

        // Cập nhật lại thông tin statistic
        $statistic->update($request->input());

        // chuyển hướng về trang statistic list
        return redirect()->route('admin.statistic.show', [$khoa['slug']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($khoa, $id)
    {
        // Tìm statistics
        $statistic = Statistics::find($id);

        // dừng nếu statistic không tồn tại
        abort_if(!$statistic, 404);

        // dừng lại nếu cập nhật statistic có khoa khác với khoa của statistic đang login trừ admin
        abort_if(!Auth::user()['isAdmin'] && $statistic['faculty_id'] != Auth::user()['faculty_id'], 403);

        // xóa statistic
        Statistics::destroy($id);

        // chuyển hướng về trang statistic list
        return redirect()->route('admin.statistic.show', [$khoa['slug']]);
    }
}
