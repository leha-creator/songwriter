<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSongRequest extends FormRequest
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
            'title' => 'required|max:255',
            'songContent' => 'required|json',
        ];
    }

    /**
     * Get validation messages for specific validation rules
     * @return array
     */

    public function messages()
    {
        return [
            'title.required' => 'Отсутствует название',
            'title.max' => 'Максимальная длина названия 256 символов',
            'songContent.required' => 'Отсутствует содержимое',
        ];
    }
}
