<?php

namespace PPM\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserValidation extends FormRequest{

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
        $method = request()->segment(3);
        switch ($method){
            case 'edit':
                return [
                    'username'         => 'required',
                    'name'             => 'required',
                    'address'          => 'required',
                    'sex'              => 'required',
                    'birth_date'       => 'required',
                    'email'            => 'required|email',
                    'identity_card_no' => 'required|numeric',
                    'phone'            => 'required|regex:/(0)[0-9]{9}/',
                    'company'          => 'required',
                    'company_address'  => 'required',
                    'founding'         => 'required',
                    'category_id'      => 'required',
                    'code_id'          => 'required',
                    'class'            => 'required',
                    'course'           => 'required',
                    'major_id'         => 'required',
                ];
                break;
            default:
                return [
                    'username'         => 'required',
                    'password'         => 'required',
                    'name'             => 'required',
                    'address'          => 'required',
                    'sex'              => 'required',
                    'birth_date'       => 'required',
                    'email'            => 'required|email',
                    'identity_card_no' => 'required|numeric',
                    'phone'            => 'required|regex:/(0)[0-9]{9}/',
                    'company'          => 'required',
                    'company_address'  => 'required',
                    'founding'         => 'required',
                    'category_id'      => 'required',
                    'code_id'          => 'required',
                    'class'            => 'required',
                    'course'           => 'required',
                    'major_id'         => 'required',
                    'status'           => 'required',
                ];
                break;
        }
    }

    public function messages(){
        return [
            'required'     => ':attribute không được bỏ trống',
            'regex'        => ':attribute khôn đúng định dạng',
            'email'        => ':attribute khôn đúng định dạng',
            'numeric'      => ':attribute khôn đúng định dạng',
            'unique:users' => ':attribute đã tồn tại'
        ];
    }

    public function attributes(){
        return [
            'name'             => 'Tên thể loại',
            'address'          => 'Địa chỉ',
            'phone'            => 'Số điện thoại',
            'username'         => 'Tên đăng nhập',
            'password'         => 'Mật khẩu',
            'status'           => 'Trạng thái',
            'sex'              => 'Giới tính',
            'birth_date'       => 'Sinh nhật',
            'identity_card_no' => 'Số CMND',
            'company'          => 'Tên công ty',
            'company_address'  => 'Địa chỉ công ty',
            'founding'         => 'Năm thành lập',
            'category_id'      => 'Chuyên ngành tuyển dụng',
            'code_id'          => 'Mã số sinh viên',
            'class'            => 'Tên lớp',
            'course'           => 'Khóa học',
            'major_id'         => 'Chuyên ngành'
        ];
    }
}
