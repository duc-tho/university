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
            'name'=>'required',
            'slug'=>'required',
            'meta_keywords'=>'required',
            'meta_descriptions'=>'required',
            // 'layout_name'=>'unique:faculty,layout_name',
            'layout_page'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>' Chưa nhập tên khoa...',
            'slug.required'=>' Chưa nhập slug...',
            'meta_keywords.required'=>' Chưa nhập Meta_Ketwords...',
            'meta_descriptions.required'=>' Chưa nhập Meta_description ...',
            // 'layout_name.unique'=>' Layout_name đã tồn tại, vui lòng nhập một tên khác...',
            'layout_page.required'=>' Chưa nhập Layout_page ...',
        ];
    }
}
