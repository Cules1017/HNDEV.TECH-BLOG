<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'category_id' => 'required',
            'title' => 'required|unique:posts|max:255|min:5',
            'feature_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'subtitle'=>'required|max:500|min:25',
            'content'=>'required|min:25',
        ];
    }
    public function messages()
{
    return [
        'category_id.required' => 'Bạn chưa chọn danh mục',
        'title.required' => 'Bạn chưa điền tiêu đê',
        'title.unique'=>'Tên bài viết đã bị trùng lặp',
        'title.max'=>'Tiêu đề tối đa 225 kí tự',
        'title.min'=>'Tiêu đề tối thiểu 5 kí tự',
        'feature_img.required' => 'Bạn chưa tải ảnh lên',
        'content.required' => 'Bạn chưa điền nội dung',
        'subtitle.required' => 'Bạn chưa điền đề phụ',
        'subtitle.max'=>'Tiêu đề phụ tối đa 500 kí tự',
        'subtitle.min'=>'Tiêu đề phụ tối thiểu 25 kí tự',
        'content.min'=>'Nội dung tối thiểu 25 kí tự',
        'feature_img.image' => 'Bạn chưa tải ảnh lên',
        'feature_img.mimes' => 'File hợp lệ là jpeg,png,jpg,gif,svg',
    ];
}
}
