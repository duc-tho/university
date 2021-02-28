<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AboutCategory;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\Settings;
use App\Models\Socials;
use App\Models\Specialized;
use Illuminate\Http\Request;

class EducateController extends Controller
{
    public function detail(Request $request, $khoa)
    {

        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();

        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();
        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }
        // Lấy menu
        $category = Category::where([
            'status' => '1',

        ])->get();

        if (!$category->isEmpty()) getCategories($category);
        else $category = null;

        // lấy các liên kết qua trang khác ở footer
        $footer_link = FooterLinkCategory::where(['status' => 1])->get();

        if (!$footer_link->isEmpty()) foreach ($footer_link as $key => $item) {
            $item['child'] = $item->footerLinks;
        }

        // Lấy danh sách ngành kèm url
        $specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty_id])->get();

        if (!$specialized->isEmpty()) foreach ($specialized as $key => $item) {
            $item['url'] = route('dao-tao-chi-tiet', [$faculty['slug'], $item['slug']]);
        }
        // Lấy các icon mạng xã hội
        $socials_icon = Socials::where(['status' => 1])->get();

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::all();

        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }
        $footer_faculty = Faculty::where(['status' => 1, ['id', '!=', '1']])->get();

        return view('client.layout.layout_kdl.page.educate', [
            'logo' => getSettingValue($settings, 'logo'),
            'copyright' => getSettingValue($settings, 'copyright'),

            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'faculty' => $faculty,
            'category' => $category,
            //Start Khoa DU Lich
            'logo_travel' => getSettingValue($settings, 'logo_travel'),
            'footer_phone_travel' => getSettingValue($settings, 'footer_phone_travel'),
            'footer_email_travel' => getSettingValue($settings, 'footer_email_travel'),
            'footer_website_travel' => getSettingValue($settings, 'footer_website_travel'),
            'footer_address_travel' => getSettingValue($settings, 'footer_address_travel'),
            //End Khoa Du Lịch
            'footer_faculty' => $footer_faculty,
            'specialized' => $specialized,

        ]);
    }
}
