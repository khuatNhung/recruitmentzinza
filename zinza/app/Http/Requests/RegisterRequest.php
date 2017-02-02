<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            //
            'name' =>'required',
            'email' =>'required|email|max:255|unique:users',
            'password'=>'required|min:6|confirmed',
            'phone' =>'required|max:255|unique:users'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Vui lòng nhập user name',
            'email.required'=>'Vui lòng nhập email',
            'email.unique'=>'Email này đã tồn tại',
            'password.required'=>'Vui lòng nhập password',
            'phone.unique'=>'Số điện thoại này đã tồn tại',
            'phone.required'=>'Vui lòng nhập số điện thoại',
            'password.min'=>'Vui lòng nhập mật khẩu có ít nhất 6 kí tự',
            'password.confirmed'=>'Nhập lại mật khẩu bị sai rồi! lè lè!'
        ];
    }
}
