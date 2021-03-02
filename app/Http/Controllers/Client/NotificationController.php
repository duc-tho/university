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
use App\Models\News;
use App\Models\Settings;
use App\Models\Socials;
use App\Models\Specialized;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request, $khoa )
    {
        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();

        // Lấy menu
        $menu = Category::where([
            'status' => '1',

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



        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();

        // Lấy danh mục hình

        // Lấy danh sách ngành kèm url
        $all_specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        // dd($image_category); // Bỏ comment để xem cấu trúc dữ liệu hình ảnh

        // lấy danh mục tin tức
        $category = Category::where(['status' => 1, 'show_at_news' => '1'])->orderBy('display_order', 'asc')->get();

        if (!$category->isEmpty()) foreach ($category as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(4);

            if (!$news->isEmpty()) $item['news'] = $news;
        }

        $category_travel = Category::where(['status' => 1, 'show_at_news' => '1'])->orderBy('display_order', 'asc')->get();

        if (!$category_travel->isEmpty()) foreach ($category_travel as $key => $item) {
            $news = $item->news()->orderBy('id', 'desc')->paginate(4);

            if (!$news->isEmpty()) $item['news'] = $news;
        }


        $footer_faculty = Faculty::where(['status' => 1, ['id', '!=', '1']])->get();


        return view('client.layout.' . $layout_name . '.page.notification', [
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
            // 'about' => $about_category,
            'category' => $category,
            'news_travel' => $category_travel,


            //Start Khoa Du Lịch
            'logo_travel' => getSettingValue($settings, 'logo_travel'),
            'slogan_main_travel' => getSettingValue($settings, 'slogan_main_travel'),
            'slogan_intro_travel' => getSettingValue($settings, 'slogan_intro_travel'),
            'slogan_intro_travel2' => getSettingValue($settings, 'slogan_intro_travel2'),
            'slogan_intro_travel3' => getSettingValue($settings, 'slogan_intro_travel3'),
            'slogan_intro_travel4' => getSettingValue($settings, 'slogan_intro_travel4'),
            'slogan_intro_travel5' => getSettingValue($settings, 'slogan_intro_travel5'),

            'footer_phone_travel' => getSettingValue($settings, 'footer_phone_travel'),
            'footer_email_travel' => getSettingValue($settings, 'footer_email_travel'),
            'footer_website_travel' => getSettingValue($settings, 'footer_website_travel'),
            'footer_address_travel' => getSettingValue($settings, 'footer_address_travel'),

            'all_specialized' => $all_specialized,
            'all_category' => $all_category,
            'footer_faculty' => $footer_faculty,




            // 'name' => getSettingValue($specialized, 'name'),
            // 'intro' => getSettingValue($specialized, 'intro'),
            //End Khoa Du Lịch
        ]);
    }

    public function detail(Request $request, $khoa)
    {
        return;
    }
}
