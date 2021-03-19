<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditFacultyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [


            'img'=>'image',
            'name'=>'required',
            'slug'=>'required',
            'meta_keywords'=>'required',
            'meta_descriptions'=>'required',
            'layout_page'=>'required',


        ];
    }
    public function messages()
    {
        return[
            'name.required'=>' Tên Khoa đã tồn tại, vui lòng nhập một tên khác...',
            'slug.required'=>' Slug đã tồn tại, vui lòng nhập một tên khác...',
            'meta_keywords.required'=>' Meta_title đã tồn tại, vui lòng nhập một meta khác...',
            'meta_descriptions.required'=>' Meta_description đã tồn tại, vui lòng nhập một meta khác...',
            'layout_name.required'=>' Tên Layout đã tồn tại, vui lòng nhập một tên khác...',
            'layout_page.required'=>' Layout_page đã tồn tại, vui lòng nhập một tên khác...',
        ];
    }
}
