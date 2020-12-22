<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestDriverRegisterRequest extends FormRequest
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
            //
            'testDate' => 'required|after:yesterday'
        ];
    }

    public function messages()
    {
        return [
            'testDate.required' => 'Vui lòng nhập ngày đăng ký',
            'testDate.after' => 'Ngày đăng ký không hợp lệ'
        ];

    }
}
