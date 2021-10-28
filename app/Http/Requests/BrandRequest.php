<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BrandRequest extends FormRequest
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
        $formRules = [
            "name" => [
                'required',
                Rule::unique('brands')->ignore($this->id)
            ],
            "image" => [
                'mimes:jpg,png'
            ],
            "address" => [
                'required'
            ]
        ];

        if ($this->id == null) {
            $formRules["image"][] = "required";
        }

        return $formRules;
    }

    public function messages()
    {
        return [
            "name.required" => 'Hãy nhập tên!',
            "name.unique" => 'Tên đã tồn tại!',
            "image.required" => 'Hãy chọn ảnh!',
            "image.mimes" => 'Định dạng hợp lệ: jpg, png!',
            "address.required" => 'Hãy nhập địa chỉ!',
        ];
    }
}
