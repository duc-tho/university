<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddNewsRequest extends FormRequest
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
            'title'=>'unique:news,title',
            'slug'=>'unique:news,slug',
            'meta_keywords'=>'unique:news,meta_keywords,',
            'meta_descriptions'=>'unique:news,meta_descriptions,',
        ];
    }
    public function messages()
    {
        return[
            'title.unique'=>'Tên tin tức đã tồn tại, vui lòng nhập một tên khác...',
            'slug.unique'=>' Slug đã tồn tại, vui lòng nhập một tên khác...',
            'meta_keywords.unique'=>' meta_keywords đã tồn tại, vui lòng nhập một meta khác...',
            'meta_descriptions.unique'=>' meta_descriptions đã tồn tại, vui lòng nhập một meta khác...',
        ];
    }
}
