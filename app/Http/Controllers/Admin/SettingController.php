<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $khoa)
    {
        $settings = Settings::where(['faculty_id' => $khoa['id'], 'status' => 1])->get();

        // dd($settings);

        return view('server.pages.setting.index', [
            'settings' => $settings,
            'khoa' => $khoa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $khoa)
    {
        $settings = Settings::where(['faculty_id' => $khoa['id'], 'status' => 1])->get();

        foreach ($settings as $setting) {
            if ($request->filled($setting['name']) || $request->file($setting['name']) != null) {
                switch ($setting['type']) {
                    case 'text':
                        if ($request[$setting['name']] != $setting['value']) {
                            $setting['value'] = $request[$setting['name']];

                            $setting->save();
                        }

                        break;
                    case 'video':
                        $setting['value'] = upload_file($request->file($setting['name']), 'dist/upload/video/setting' . $setting['name']);

                        $setting->save();
                        break;
                    case 'image':
                        $setting['value'] = upload_file($request->file($setting['name']), 'dist/upload/image/setting' . $setting['name']);

                        $setting->save();
                        break;
                    case 'file':
                        $setting['value'] = upload_file($request->file($setting['name']), 'dist/upload/file/setting' . $setting['name']);

                        $setting->save();
                        break;
                }
            }
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }
}
