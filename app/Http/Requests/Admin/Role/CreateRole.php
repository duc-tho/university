<?php

namespace App\Http\Requests\Admin\Role;

use Illuminate\Foundation\Http\FormRequest;

class CreateRole extends FormRequest
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
            'name' => ['unique:roles', 'required'],
            'display_name' => ['required', 'unique:roles']
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Tên vai trò đã tồn tại!',
            'name.required' => 'Chưa nhập tên vai trò nè!',
            //
            'display_name.unique' => 'Tên hiển thị của vai trò đã tồn tại!',
            'display_name.required' => 'Chưa nhập tên hiển thị của vai trò nè!',
        ];
    }
}
