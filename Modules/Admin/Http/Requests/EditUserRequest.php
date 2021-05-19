<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'faculty_id' => 'required',
            'phone' => 'required|numeric|max:999999999999',
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'nickname' => 'required|min:3|max:20',
            'email' => 'required',
            'password' => 'min:8|nullable',
            're-password' => 'same:password'
        ];
    }
    public function messages()
    {
        return [
            'faculty_id.required' => 'Chưa chọn khoa nè!',
            //
            'phone.required' => 'Chưa nhập số điện thoại nè!',
            'phone.numeric' => 'Số điện thoại sao lại có chữ?',
            'phone.max' => 'Số điện thoại tối đa là 12 chữ số!',
            //
            'first_name.required' => 'Chưa nhập họ nè!',
            'first_name.max' => 'Họ dài quá rồi!',
            //
            'last_name.required' => 'Chưa nhập tên nè!',
            'last_name.max' => 'Tên dài quá rồi!',
            //
            'nickname.required' => 'Chưa nhập biệt danh nè!',
            'nickname.min' => 'Biệt danh ngắn quá!',
            'nickname.max' => 'Biệt danh dài quá!',
            //
            // 'email.unique' => 'Email đã tồn tại, vui lòng nhập một Email khác...',
            'email.required' => 'Chưa nhập email nè!',
            //
            'password.min' => 'Mật khẩu phải ít nhất 8 ký tự nha!',
            //
            're-password.same' => 'Mật khẩu nhập lại chưa khớp!'
        ];
    }
}
