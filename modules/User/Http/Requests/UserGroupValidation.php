<?php

namespace PPM\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserGroupValidation extends FormRequest{

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
            default:
                return [
                    'name'   => 'required',
                    'key'    => 'required',
                    'status' => 'required',
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
            'name'   => 'Tên thể loại',
            'key'    => 'Key',
            'status' => 'Trạng thái'
        ];
    }
}
