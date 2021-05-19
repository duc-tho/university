<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FooterLinkCategory;
use Illuminate\Http\Request;

class FooterLinkCategoryController extends Controller
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request ,$khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
        ];

        $footer_link_category_list = FooterLinkCategory::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);
        return view('server.pages.footer_link_category.index', [
            'footer_link_category_list' =>  $footer_link_category_list,
            'khoa' => $khoa,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($khoa)
    {
        return view('server.pages.footer_link_category.create', [
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
        $footer_link_category = new FooterLinkCategory($request->input());

        $request['status'] == "on" ? $footer_link_category['status'] = 1 : $footer_link_category['status'] = 0;

        $footer_link_category->save();
        return redirect()->route('admin.footer_link_category.show', [$khoa['slug']]);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $khoa, $id)
    {
        $footer_link_category = FooterLinkCategory::find($id);
        return view('server.pages.footer_link_category.edit', [
            'footer_link_category' => $footer_link_category,
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
        $footer_link_category = FooterLinkCategory::find($id);

        abort_if(!$footer_link_category, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        $footer_link_category->update($request->input());
        // chuyển hướng về trang footer_link_category list
        return redirect()->route('admin.footer_link_category.show', [$khoa['slug']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($khoa, $id)
    {
        $footer_link_category = FooterLinkCategory::find($id);

        abort_if(!$footer_link_category, 404);

        FooterLinkCategory::destroy($footer_link_category['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.footer_link_category.show', [$khoa['slug']]);
    }
}
