<?php

namespace PPM\Post\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostValidation extends FormRequest{

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
        if (request()->segment(1) !== 'admin'){
            $method = request()->segment(2);
        }else{
            $method = request()->segment(3);
        }
        switch ($method){
            case 'edit':
                return [
                    'name'        => 'required',
                    'status'      => 'required',
                    'category_id' => 'required',
                    'description' => 'required'
                ];
                break;
            default:
                return [
                    'description' => 'required',
                    'name'        => 'required',
                    'status'      => 'required',
                    'category_id' => 'required',
                    'image'       => 'required',
                ];
                break;
        }
    }

    public function messages(){
        return [
            'required' => ':attribute không được bỏ trống',
        ];
    }

    public function attributes(){
        return [
            'name'        => 'Tiêu đề bài đăng',
            'status'      => 'Trạng thái',
            'category_id' => 'Thể loại bài đăng',
            'description' => 'Mô tả',
            'image'       => 'Hình ảnh',
        ];
    }
}
