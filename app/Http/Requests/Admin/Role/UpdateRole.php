<?php

namespace App\Http\Requests\Admin\Role;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRole extends FormRequest
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
            'name' => ['required'],
            'display_name' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Chưa nhập tên vai trò nè!',
            //
            'display_name.required' => 'Chưa nhập tên hiển thị của vai trò nè!',
        ];
    }
}
