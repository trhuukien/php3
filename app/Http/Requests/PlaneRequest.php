<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PlaneRequest extends FormRequest
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
                Rule::unique('planes')->ignore($this->id)
            ],
            "image" => [
                'mimes:jpg,png'
            ],
            "engine" => [
                'required'
            ],
            "slot" => [
                'required',
                'numeric'
            ],
            "length" => [
                'required',
                'numeric',

            ],
            "wingspan" => [
                'required',
                'numeric',

            ],
            "cruisespeed" => [
                'required',
                'numeric',

            ]

        ];

        if ($this->id == null) {
            $formRules['image'][] = "required";
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
            "engine.required" => 'Hãy nhập loại động cơ!',
            "slot.required" => 'Hãy nhập số chỗ ngồi!',
            "slot.numeric" => 'Trường này là số',
            "length.required" => 'Hãy nhập chiều dài!',
            "length.numeric" => 'Trường này là số',
            "wingspan.required" => 'Hãy nhập chiều dài!',
            "wingspan.numeric" => 'Trường này là số',
            "cruisespeed.required" => 'Hãy nhập chiều dài!',
            "cruisespeed.numeric" => 'Trường này là số',
        ];
    }
}
