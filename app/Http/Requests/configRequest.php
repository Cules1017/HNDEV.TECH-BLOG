<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class configRequest extends FormRequest
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
            'config_key' => 'required',
            'config_value'=>'required',
        ];
    }
    public function messages()
    {
        return [
            
            'config_key.required' => 'Bạn chưa nhập config key',
            'config_value.required' => 'Bạn chưa nhập config value',
            // 'Parent_id.required'=>'Bạn chưa ch5n danh mục cha',
        ];
    }
}
