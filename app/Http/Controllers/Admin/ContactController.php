<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $khoa)
    {
        $item_per_page = 12;
        if ($request->has('item-per-page')) $item_per_page = $request->query('item-per-page');

        $query_condition = [
            'status' => '1',
            'faculty_id' => $khoa['id']
        ];

        $contact_list = Contact::where($query_condition)->orderBy("id", "desc")->paginate($item_per_page);
        return view('server.pages.contact.index', [
            'contact_list' =>  $contact_list,
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
        return view('server.pages.contact.create', [
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
        $contact = new Contact($request->input());

        abort_if($contact['faculty_id'] != $khoa['id'], 403);

        $request['status'] == "on" ? $contact['status'] = 1 : $contact['status'] = 0;

        if ($request->file('image') != null) $contact['image'] = upload_file($request->file('image'), 'dist/upload/image/contact');


        $contact->save();
        return redirect()->route('admin.contact.show', [$khoa['slug']]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $khoa, $id)
    {
        $contact = Contact::find($id);

        abort_if(!$contact, 404);

        abort_if($contact['faculty_id'] != $khoa['id'], 403);

        return view('server.pages.contact.edit', [
            'contact' => $contact,
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
        $contact = Contact::find($id);

        abort_if(!$contact, 404);

        abort_if($contact['faculty_id'] != $khoa['id'], 403);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        // if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/contact')]);

        $contact->update($request->input());


        // chuyển hướng về trang contact list
        return redirect()->route('admin.contact.show', [$khoa['slug']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($khoa, $id)
    {
        $contact = Contact::find($id);

        abort_if(!$contact, 404);

        abort_if($contact['faculty_id'] != $khoa['id'], 403);

        Contact::destroy($contact['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.contact.show', [$khoa['slug']]);
    }
}
