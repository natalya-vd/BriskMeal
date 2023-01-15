<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRecipeRequest extends FormRequest
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
            "name" => "required|string|min:3|max:38",
            "cook_time" => "required|integer|numeric|min:1|max:255",
            "description" => "required|string",
            "recipe_text" => "required|string",

            "allergens" => "array",
            "allergens.*" => "array:id,name",
            "allergens.*.id" => "required|integer|exists:allergens,id",
            "allergens.*.name" => "required|string",

            "preferences" => "array",
            "preferences.*" => "array:id,name",
            "preferences.*.id" => "required|integer|exists:preferences,id",
            "preferences.*.name" => "required|string",

            "ingredients" => "array",
            "ingredients.*" => "array:count,item",
            "ingredients.*.count" => "required|numeric|min:0|not_in:0",
            "ingredients.*.item" => "required|array:id,name",
            "ingredients.*.item.id" => "required|integer|exists:ingredients,id",
            "ingredients.*.item.name" => "required|string",

            "nutrition_values" => "array",
            "nutrition_values.*" => "array:count,item",
            "nutrition_values.*.count" => "required|numeric|min:0|not_in:0",
            "nutrition_values.*.item" => "required|array:id,name",
            "nutrition_values.*.item.id" => "required|integer|exists:nutrition_values,id",
            "nutrition_values.*.item.name" => "required|string",
        ];
    }
}
