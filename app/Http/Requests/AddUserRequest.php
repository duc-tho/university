<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'nickname'=>'unique:users,nickname',
            'email'=>'unique:users,email',
            'password' => 'required|min:8',
            'passwordAgain' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return[
            'nickname.unique'=>' Tên người dùng đã tồn tại, vui lòng nhập một tên khác...',
            'email.unique'=>'Email đã tồn tại, vui lòng nhập một Email khác...',
            'password.min'=> 'Mật khẩu phải ít nhất 8 ký tự',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
        ];
    }
}
