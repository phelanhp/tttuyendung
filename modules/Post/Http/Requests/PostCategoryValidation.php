<?php

namespace PPM\Post\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCategoryValidation extends FormRequest
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
        $method = $this->segment(3);
        switch ($method) {
            default:
                return [
                    'name' => 'required',
                    'status' => 'required',
                ];
                break;
        }
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên thể loại',
            'status' => 'Trạng thái',
        ];
    }
}
