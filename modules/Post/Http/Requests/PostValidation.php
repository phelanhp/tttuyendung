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
        $method = request()->segment(3);
        switch ($method){
            case 'edit':
                return [
                    'name'        => 'required',
                    'status'      => 'required',
                    'category_id' => 'required',
                ];
                break;
            default:
                return [
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
            'name'   => 'Tiêu đề bài đăng',
            'status' => 'Trạng thái',
            'category_id' => 'Thể loại bài đăng',
        ];
    }
}
