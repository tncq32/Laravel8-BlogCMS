<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewCategoriesRequest extends FormRequest
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
            'title'       => 'nullable|string|max:255',
            'description'       => 'nullable|string|max:255',
            'rank'       => 'nullable',
            'status'      => 'nullable',
            'front_image'      => 'nullable',
        ];
    }
}
