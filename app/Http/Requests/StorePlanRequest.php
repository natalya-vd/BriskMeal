<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
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
            "preferences" => "required|array",
            "preferences.*" => "required|string",
            "num_people" => "required|integer|min:0|not_in:0",
            "meals_week" => "required|integer|min:0|not_in:0",
        ];
    }
}
