<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cart_id' => 'required|integer|exists:carts,id',
            "first_name" => "required|string|min:3|max:255",
            "last_name" => "required|string|min:3|max:255",
            "phone" => "required|string|min:3|max:255",
            "address" => "required|string|min:3|max:255",
            "address_line_2" => "required|string|min:3|max:255",
            "city" => "required|string|min:3|max:255",
            "region" => "required|string|min:2|max:255",
            "zip_code" => "required|string|min:3|max:255",
            "delivery_day" => "required|date",
            "delivery_instructions" => "string|min:3|max:255",
            "promotions" => "boolean",
        ];
    }
}
