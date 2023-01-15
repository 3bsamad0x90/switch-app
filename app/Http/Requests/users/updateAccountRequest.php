<?php

namespace App\Http\Requests\users;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class updateAccountRequest extends FormRequest
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
            'name' => 'required',
            'familyName' => 'required',
            'job_title' => 'required',
            'email' => 'required|unique:users,email,'.Auth::user()->id,
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'language' => 'required',
            'bio' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jepg',
            'background_image' => 'nullable|image|mimes:jpg,jepg'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('validation.name'),
            'familyName.required' => trans('validation.familyName'),
            'job_title.required' => '',
            'email.required' => '',
            'email.unique' => '',
            'phone.required' => '',
            'language.required' => '',
            'bio.string' => '',
        ];
    }
}
