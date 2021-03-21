<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AboutCategory;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Faculty;
use App\Models\FooterLinkCategory;
use App\Models\Menu;
use App\Models\Settings;
use App\Models\Socials;
use App\Models\Specialized;
use App\Models\TeacherRepresentative;
use Illuminate\Http\Request;

class EducateController extends Controller
{
    public function detail(Request $request, $khoa, $nganh)
    {

        $faculty = Faculty::where(['status' => 1, 'slug' => $khoa])->first();
        abort_if(!$faculty, 404);
        $faculty_id = $faculty['id'];

        $layout_name = $faculty['layout_name'];

        $settings = Settings::where(['status' => 1, 'faculty_id' => $faculty['id']])->get();
        $teacher = TeacherRepresentative::where(['status' => 1])->get();
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
        $all_specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        $all_category = Category::where(['status' => 1, 'faculty_id' => $faculty->id])->get();

        $specialized = Specialized::where(['status' => 1, 'faculty_id' => $faculty->id, 'slug' => $nganh])->first();


        if (!$all_specialized->isEmpty()) foreach ($all_specialized as $key => $item) {
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

        $contact = Contact::where(['faculty_id' => $faculty_id])->first();

        $menu_list = Menu::where(['status' => 1,'faculty_id' => $faculty_id])->get();

        $all_faculty = Faculty::where(['status' => 1, ['id', '!=', $faculty_id]])->get();

        if (!$all_faculty->isEmpty()) foreach ($all_faculty as $key => $item) {
            $item['url'] = route('trang-chu', [$item['slug']]);
        }

        return view('client.layout.' . $layout_name . '.page.educate', [
            'license' => getSettingValue($settings, 'license'),
            'license_content' => getSettingValue($settings, 'license_content'),
            'website' => getSettingValue($settings, 'website'),
            'phone' => getSettingValue($settings, 'phone'),
            'logo' => getSettingValue($settings, 'logo'),
            'copyright' => getSettingValue($settings, 'copyright'),
            'teacher' => $teacher,
            'footer_link' => $footer_link,
            'socials_icon' => $socials_icon,
            'faculty' => $faculty,
            'category' => $category,
            'all_specialized' => $all_specialized,
            'specialized' => $specialized,
            'address' =>getSettingValue($settings, 'address'),
            'email' => $contact['email'],
            'menu_list' => $menu_list,
            'all_faculty' => $all_faculty,
            //Start Khoa DU Lich
            'logo_travel' => getSettingValue($settings, 'logo_travel'),
            'footer_phone_travel' => getSettingValue($settings, 'footer_phone_travel'),
            'footer_email_travel' => getSettingValue($settings, 'footer_email_travel'),
            'footer_website_travel' => getSettingValue($settings, 'footer_website_travel'),
            'footer_address_travel' => getSettingValue($settings, 'footer_address_travel'),
            'footer_address_travel' => getSettingValue($settings, 'footer_address_travel'),
            'slogan_teacher_educate' => getSettingValue($settings, 'slogan_teacher_educate'),
            //End Khoa Du Lịch
            'footer_faculty' => $footer_faculty,
            'all_category' => $all_category,
            'title_faculty_description' => getSettingValue($settings, 'title_faculty_description'),
            'title_scholarship' => getSettingValue($settings, 'title_scholarship'),
            'title_scholarship_content' => getSettingValue($settings, 'title_scholarship_content'),
            'title_develop' => getSettingValue($settings, 'title_develop'),
            'title_develop_content' => getSettingValue($settings, 'title_develop_content'),
            'title_resources' => getSettingValue($settings, 'title_resources'),
            'title_resources_content' => getSettingValue($settings, 'title_resources_content'),
            'title_evaluate_student' => getSettingValue($settings, 'title_evaluate_student'),
            'title_name_uni_footer' => getSettingValue($settings, 'title_name_uni_footer'),
            'title_license_footer' => getSettingValue($settings, 'title_license_footer'),
            'title_license_content_footer' => getSettingValue($settings, 'title_license_content_footer'),
            'title_support_line' => getSettingValue($settings, 'title_support_line'),
            'number_support_line' => getSettingValue($settings, 'number_support_line'),
            'title_infor_teacher' => getSettingValue($settings, 'title_infor_teacher'),
            'title_teacher_faculty' => getSettingValue($settings, 'title_teacher_faculty'),
            'content_teacher_faculty' => getSettingValue($settings, 'content_teacher_faculty'),
            'title_hot_line' => getSettingValue($settings, 'title_hot_line'),
            'number_hot_line' => getSettingValue($settings, 'number_hot_line'),

        ]);
    }
}
