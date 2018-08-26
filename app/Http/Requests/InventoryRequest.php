<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InventoryRequest extends FormRequest
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
            'product_name' => 'required|unique:products,name'.$this->id,
            'unit_cost' => 'required|numeric',
            'quantity' => 'required|numeric',
            'channel' => 'required',
            'image_path' => 'sometimes|active_url|nullable'
        ];
    }
}
