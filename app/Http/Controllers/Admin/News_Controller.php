<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Faculty;

use App\Http\Requests\AddNewsRequest;
use Illuminate\Http\Request;

class News_Controller extends Controller
{
    public function show(Request $request, $khoa)
    {
        $news_list = News::where(["status" => "1"])->orderBy("id", "desc")->paginate(10);
        $categorylist= Category::all();
        return view('server.pages.news.index', [
            'news_list' =>  $news_list,
            'categorylist' =>  $categorylist,
            'khoa' =>$khoa
        ]);
    }
    public function create(Request $request, $khoa)
    {
        $faculty_list = Faculty::all();
        $category_list = Category::all();
        return view('server.pages.news.create', [
            'category_list' =>  $category_list,
            'faculty_list' => $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function store(Request $request, $khoa)
    {
        // $filename = $request->img->getClientOriginalName();

        $news = new News($request->input());

        $request['status'] == "on" ? $news['status'] = 1 : $news['status'] = 0;

        if ($request->file('image') != null) $news['image'] = upload_file($request->file('image'), 'dist/upload/image/news');

        $news->save();
        return redirect()->route('admin.news.show', [$khoa['slug']]);
    }
    public function edit(Request $request, $khoa, $id)
    {
        $news = News::find($id);
        $faculty_list = Faculty::all();
        $category_list = Category::all();
        return view('server.pages.news.edit', [
            'news' => $news,
            'category_list' => $category_list,
            'faculty_list' => $faculty_list,
            'khoa' => $khoa,
        ]);
    }
    public function update(Request $request, $khoa, $id)
    {

        $news = News::find($id);

        abort_if(!$news, 404);

        if ($request->has('status')) $request->merge(['status' => $request['status'] == "on" ? 1 : 0]);

        if ($request->file('image') != null) $request->merge(['image' => upload_file($request->file('image'), 'dist/upload/news')]);

        $news->update($request->input());

        // chuyển hướng về trang teacher list
        return redirect()->route('admin.news.show', [$khoa['slug']]);
    }
    public function delete($khoa, $id)
    {
        News::find($id);
        News::destroy($id);
        // chuyển hướng về trang faculty list
        return redirect()->route('admin.news.show', [$khoa['slug']]);
    }
}