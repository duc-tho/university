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
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request, $khoa)
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

        // Lấy các bài giới thiệu
        $about_category = AboutCategory::all();

        if (!$about_category->isEmpty()) foreach ($about_category as $key => $item) {
            $item['link'] = route('gioi-thieu-chi-tiet', [$faculty['slug'], $item['slug']]);
        }
        $footer_faculty = Faculty::where(['status' => 1, ['id', '!=', '1']])->get();
        // lấy thông tin liên hệ
        $contact = Contact::where(['faculty_id' => $faculty['id']])->first();

        return view('client.layout.layout_kdl.page.contact', [

            'phone' => $contact['phone'],
            'email' => $contact['email'],
            'hotline' => $contact['hotline'],
            'google_map_link' => $contact['map_embed'],
            'website_link' => $contact['website'],
            'contact_title' => $contact['contact_title'],
            'address' => $contact['address_info'],
            'logo' => getSettingValue($settings, 'logo'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'menu' => $menu,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'faculty' => $faculty,
            //Start Khoa DU Lich
            'logo_travel' => getSettingValue($settings, 'logo_travel'),
            'footer_phone_travel' => getSettingValue($settings, 'footer_phone_travel'),
            'footer_email_travel' => getSettingValue($settings, 'footer_email_travel'),
            'footer_website_travel' => getSettingValue($settings, 'footer_website_travel'),
            'footer_address_travel' => getSettingValue($settings, 'footer_address_travel'),
            //End Khoa Du Lịch
            'footer_faculty' => $footer_faculty,
        ]);
    }
}
