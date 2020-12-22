<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'productName' => 'required',
            'productPrice' => 'numeric|required',
            'productImg' => 'required'
        ];
    }

    public function messages()
    {
        return [
          'productName.required' => 'Mời nhập tên sản phẩm',
          'productPrice.numeric' => 'Giá sản phẩm không hợp lệ',
          'productPrice.required' => 'Giá sản phẩm không được để trống',
          'productImg.required' => 'Vui lòng chọn ảnh'
        ];
    }
}
