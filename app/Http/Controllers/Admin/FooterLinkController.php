<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterLink;
use App\Models\FooterLinkCategory;
use Illuminate\Http\Request;

class FooterLinkController extends Controller
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
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
            
        ];
        $footer_link_category_list = FooterLinkCategory::all();
        $footer_link_list = FooterLink::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);
        return view('server.pages.footer_link.index', [
            'footer_link_category_list' =>  $footer_link_category_list,
            'footer_link_list' =>  $footer_link_list,
            'khoa' => $khoa
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($khoa)
    {
        $footer_link_category = FooterLinkCategory::all();
        return view('server.pages.footer_link.create', [
            'khoa' => $khoa,
            'footer_link_category' => $footer_link_category,
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
        $footer_link = new FooterLink($request->input());

        $request['status'] == "on" ? $footer_link['status'] = 1 : $footer_link['status'] = 0;

        $footer_link->save();
        return redirect()->route('admin.footer_link.show', [$khoa['slug']]);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $khoa, $id)
    {
        $footer_link_category = FooterLinkCategory::all();

        $footer_link = FooterLink::find($id);

        abort_if(!$footer_link, 404);

        return view('server.pages.footer_link.edit', [
            'footer_link' => $footer_link,
            'khoa' => $khoa,
            'footer_link_category' => $footer_link_category,
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

        $footer_link = FooterLink::find($id);

        abort_if(!$footer_link, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        $footer_link->update($request->input());

        // chuyển hướng về trang footer_link list
        return redirect()->route('admin.footer_link.show', [$khoa['slug']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($khoa, $id)
    {
        $footer_link = FooterLink::find($id);

        abort_if(!$footer_link, 404);

        FooterLink::destroy($footer_link['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.footer_link.show', [$khoa['slug']]);
    }
}
