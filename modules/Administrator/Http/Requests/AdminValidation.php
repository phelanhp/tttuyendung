<?php

namespace PPM\Administrator\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminValidation extends FormRequest{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        $method = $this->segment(3);
        switch ($method){
            default:
                return [
                    'name'     => 'required',
                    'phone'    => 'required|regex:/(0)[0-9]{9}/',
                    'username' => 'required',
                    'password' => 'required',
                ];
                break;
        }
    }
    public function messages(){
        return [
            'required' => ':attribute không được bỏ trống',
            'regex' => 'Vui lòng nhập đúng định dạng số điện thoại'
        ];
    }

    public function attributes(){
        return [
            'name'     => 'Tên quản trị viên',
            'phone'    => 'Số điện thoại',
            'username' => 'Tên đăng nhập',
            'password' => 'Mật khẩu',
        ];
    }
}
