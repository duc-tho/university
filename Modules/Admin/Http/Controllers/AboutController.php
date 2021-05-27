<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Repository\About\AboutInterface;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    protected AboutInterface $aboutRepository;
    protected $_;

    public function __construct(AboutInterface $aboutRepository)
    {
        $this->_ = config('constants');

        $this->aboutRepository = $aboutRepository;
    }

    public function show(Request $request, $khoa)
    {

        $paginate = ['limit' => 12];

        $where = [
            'faculty_id' => $khoa['id']
        ];

        $order = [
            'column' => 'display_order',
            'direction' => 'desc'
        ];

        // $about_list = $this->aboutRepository->request->query();

        dd($this->aboutRepository->all());

        return view('admin::pages.about.index', [
            'about_list' =>  $about_list,
            'khoa' => $khoa
        ]);
    }



    /**
     * Create Action
     *
     * @param int $khoa
     */
    public function create($khoa)
    {
        return view('admin::pages.about.create', [
            'khoa' => $khoa,
        ]);
    }



    /**
     * Store Action
     *
     * @param int $khoa
     */
    public function store(Request $request, $khoa)
    {
        $attributes = $request->input();

        // Abort if faculty_id of record doesn't match curent faculty_id
        abort_if($attributes['faculty_id'] != $khoa['id'], $this->_['ERROR_CODE']['FORBITDDEN']);


        $attributes['status'] == "on"
            ? $attributes['status'] = 1
            : $attributes['status'] = 0;


        if ($request->file('image') != null) {
            $file = $request->file('image');
            $about_image_folder = $this->_['IMAGE_FOLDER'] . '/about';

            $image_path = upload_file($file, $about_image_folder);

            $attributes['image'] = $image_path;
        }

        $this->aboutRepository->create($attributes);

        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }



    public function edit(Request $request, $khoa, $id)
    {
        $about_record_data = About::find($id);

        // Abort if record not found
        abort_if(!$about_record_data, $this->_['ERROR_CODE']['NOT_FOUND']);

        // Abort if faculty_id of record doesn't match curent faculty_id
        abort_if($about_record_data['faculty_id'] != $khoa['id'], $this->_['ERROR_CODE']['FORBITĐEN']);

        return view('admin::pages.about.edit', [
            'about' => $about_record_data,
            'khoa' => $khoa,
        ]);
    }



    public function update(Request $request, $khoa, $id)
    {

        $about = About::find($id);

        abort_if(!$about, 404);

        abort_if($about['faculty_id'] != $khoa['id'], 403);



        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/image/about')]);

        $about->update($request->input());


        // chuyển hướng về trang about list
        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }



    public function delete($khoa, $id)
    {
        $about = About::find($id);

        abort_if(!$about, 404);

        abort_if($about['faculty_id'] != $khoa['id'], 403);

        About::destroy($about['id']);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.about.show', [$khoa['slug']]);
    }
}
