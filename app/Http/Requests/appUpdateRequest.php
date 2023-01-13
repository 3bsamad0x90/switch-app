<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class appUpdateRequest extends FormRequest
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
            'appName_ar' => 'required',
            'appName_en' => 'required',
            'icon' => 'image|mimes:png|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'appName_ar.required' => 'يجب ادخال اسم التطبيق بالعربية',
            'appName_en.required' => 'يجب ادخال اسم التطبيق بالانجليزية',
            'icon.image' => 'يجب ان تكون الايقونة صورة',
            'icon.mimes' => 'يجب ان تكون الايقونة بصيغة png',
            'icon.max' => 'يجب ان لا تزيد الايقونة عن 2 ميجا',
        ];
    }
}
