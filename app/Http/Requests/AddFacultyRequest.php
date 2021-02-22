<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddFacultyRequest extends FormRequest
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
            'name'=>'unique:faculty,name',
            'slug'=>'unique:faculty,slug',
            'meta_keywords'=>'unique:faculty,meta_keywords,',
            'meta_descriptions'=>'unique:faculty,meta_descriptions,',
            'layout_name'=>'unique:faculty,layout_name',
            'layout_page'=>'unique:faculty,layout_page',
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>' Tên Khoa đã tồn tại, vui lòng nhập một tên khác...',
            'slug.unique'=>' Slug đã tồn tại, vui lòng nhập một tên khác...',
            'meta_keywords.unique'=>' Meta_title đã tồn tại, vui lòng nhập một meta khác...',
            'meta_descriptions.unique'=>' Meta_description đã tồn tại, vui lòng nhập một meta khác...',
            'layout_name.unique'=>' Layout_name đã tồn tại, vui lòng nhập một tên khác...',
            'layout_page.unique'=>' Layout_page đã tồn tại, vui lòng nhập một tên khác...',
        ];
    }
}
