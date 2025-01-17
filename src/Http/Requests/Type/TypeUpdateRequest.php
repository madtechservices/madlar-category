<?php

namespace TomatoPHP\TomatoCategory\Http\Requests\Type;

use Illuminate\Foundation\Http\FormRequest;

class TypeUpdateRequest extends FormRequest
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
            'image' => 'nullable|file|image|max:1024',
            'name_tomato_translations_ar' => 'sometimes|max:255|string',
            'name_tomato_translations_en' => 'sometimes|max:255|string',
            'key' => 'sometimes|max:255|string',
            'description_tomato_translations_ar' => 'nullable|max:255|string',
            'description_tomato_translations_en' => 'nullable|max:255|string',
            'color' => 'nullable|max:255|string',
            'icon' => 'nullable|max:255|string',
            'for' => 'sometimes|max:255|string',
            'type' => 'sometimes|max:255|string'
        ];
    }
}
