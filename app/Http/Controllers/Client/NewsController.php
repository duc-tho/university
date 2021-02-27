<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AboutCategory;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\Image;
use App\Models\ImageCategory;
use App\Models\Settings;
use App\Models\Socials;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request, $khoa)
    {
        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();

        // Lấy menu
        $menu = Category::where([
            'status' => '1',
            'show_on_menu' => '1'
        ])->get();

        if (!$menu->isEmpty()) getCategories($menu);
        else $menu = null;

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::all();

        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();

        // Lấy danh mục hình

        $image_category = ImageCategory::where(['faculty_id' => $faculty_id, 'status' => 1, 'parent_id' => 0])->orderBy('display_order', 'asc')->paginate(2);

        if (!$image_category->isEmpty()) foreach ($image_category as $key => $item) {
            $item['image_group'] = ImageCategory::where(['status' => 1, 'parent_id' => $item['id']])->orderBy('display_order', 'asc')->paginate(1);

            if (!$item['image_group']->isEmpty()) foreach ($item['image_group'] as $key => $image_group) {
                $image['images'] = $image_group->images()->where(['status' => 1])->orderBy('display_order', 'asc')->get();
                $image_group['image_preview'] = $image_group['images'][0]['image'] ?? 'dist\img\image_placehoder.jpg';
            }
        }

        // dd($image_category); // Bỏ comment để xem cấu trúc dữ liệu hình ảnh

        // lấy danh mục tin tức
        $category = Category::where(['status' => 1, 'show_on_menu' => '0'])->orderBy('display_order', 'asc')->get();

        if (!$category->isEmpty()) foreach ($category as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(4);

            if (!$news->isEmpty()) $item['news'] = $news;
        }


        return view('client.layout.' . $layout_name . '.page.news', [
            'phone' => $contact['phone'],
            'faculty' => $faculty,
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website_link'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'logo' => getSettingValue($settings, 'logo'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'intro_short' => $faculty['intro_summary'],
            'menu' => $menu,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'about' => $about_category,
            'category' => $category,
            'image_category' => $image_category
        ]);
    }

    public function detail(Request $request, $khoa)
    {
        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();

        // Lấy menu
        $menu = Category::where([
            'status' => '1',
            'show_on_menu' => '1'
        ])->get();

        if (!$menu->isEmpty()) getCategories($menu);
        else $menu = null;

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::all();

        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();

        // Lấy danh mục hình

        $image_category = ImageCategory::where(['faculty_id' => $faculty_id, 'status' => 1, 'parent_id' => 0])->orderBy('display_order', 'asc')->paginate(2);

        if (!$image_category->isEmpty()) foreach ($image_category as $key => $item) {
            $item['image_group'] = ImageCategory::where(['status' => 1, 'parent_id' => $item['id']])->orderBy('display_order', 'asc')->paginate(1);

            if (!$item['image_group']->isEmpty()) foreach ($item['image_group'] as $key => $image_group) {
                $image['images'] = $image_group->images()->where(['status' => 1])->orderBy('display_order', 'asc')->get();
                $image_group['image_preview'] = $image_group['images'][0]['image'] ?? 'dist\img\image_placehoder.jpg';
            }
        }

        // dd($image_category); // Bỏ comment để xem cấu trúc dữ liệu hình ảnh

        // lấy danh mục tin tức
        $category = Category::where(['status' => 1, 'show_at_news' => '0'])->orderBy('display_order', 'asc')->get();

        if (!$category->isEmpty()) foreach ($category as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(4);

            if (!$news->isEmpty()) $item['news'] = $news;
        }


        return view('client.layout.' . $layout_name . '.page.news-detail', [
            'phone' => $contact['phone'],
            'faculty' => $faculty,
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website_link'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'logo' => getSettingValue($settings, 'logo'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'intro_short' => $faculty['intro_summary'],
            'menu' => $menu,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'about' => $about_category,
            'category' => $category,
            'image_category' => $image_category
        ]);
    }

    public function list(Request $request, $khoa)
    {
        // Lấy thông tin khoa và kiểm tra xem khoa có tồn tại hay không
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();

        // Lấy menu
        $menu = Category::where([
            'status' => '1',
            'show_on_menu' => '1'
        ])->get();

        if (!$menu->isEmpty()) getCategories($menu);
        else $menu = null;

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::all();

        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }

        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();

        // Lấy danh mục hình

        $image_category = ImageCategory::where(['faculty_id' => $faculty_id, 'status' => 1, 'parent_id' => 0])->orderBy('display_order', 'asc')->paginate(2);

        if (!$image_category->isEmpty()) foreach ($image_category as $key => $item) {
            $item['image_group'] = ImageCategory::where(['status' => 1, 'parent_id' => $item['id']])->orderBy('display_order', 'asc')->paginate(1);

            if (!$item['image_group']->isEmpty()) foreach ($item['image_group'] as $key => $image_group) {
                $image['images'] = $image_group->images()->where(['status' => 1])->orderBy('display_order', 'asc')->get();
                $image_group['image_preview'] = $image_group['images'][0]['image'] ?? 'dist\img\image_placehoder.jpg';
            }
        }

        // dd($image_category); // Bỏ comment để xem cấu trúc dữ liệu hình ảnh

        // lấy danh mục tin tức
        $category = Category::where(['status' => 1, 'show_on_menu' => '0'])->orderBy('display_order', 'asc')->get();

        if (!$category->isEmpty()) foreach ($category as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(4);

            if (!$news->isEmpty()) $item['news'] = $news;
        }


        return view('client.layout.' . $layout_name . '.page.news-list', [
            'phone' => $contact['phone'],
            'faculty' => $faculty,
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website_link'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'logo' => getSettingValue($settings, 'logo'),
            'intro_video' => getSettingValue($settings, 'intro_video'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'intro_short' => $faculty['intro_summary'],
            'menu' => $menu,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'about' => $about_category,
            'category' => $category,
            'image_category' => $image_category
        ]);
    }
}
