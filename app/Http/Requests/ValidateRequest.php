<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'name' => 'required|max:255|min:0',
            'descript'=>'required|max:500|min:0',
            // 'parent_id'=>'required',
        ];
    }
    public function messages()
    {
        return [
            
            'name.required' => 'Bạn chưa điền tên',
            'name.max'=>'Tiêu đề tối đa 225 kí tự',
            'name.min'=>'Tiêu đề tối thiểu 5 kí tự',
            'descript.required' => 'Bạn chưa điền mô tả',
            'descript.max'=>'Mô tả phụ tối đa 500 kí tự',
            'descript.min'=>'Mô tả phụ tối thiểu 10 kí tự',
            // 'Parent_id.required'=>'Bạn chưa ch5n danh mục cha',
        ];
    }
}
