<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'category_id' => 'required',
            'description' => 'required',
            'qty' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('quicktask.validate.product.name'),
            'category_id.required' => trans('quicktask.validate.product.category'),
            'description.required' => trans('quicktask.validate.product.description'),
            'qty.required' => trans('quicktask.validate.product.qty_rq'),
        ];
    }
}
