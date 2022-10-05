<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSongListRequest extends APIRequest
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
            'name' => 'max:255',
            'planned_date' => 'date_format:Y-m-d',
            'attached_songs.*.id' => 'required|exists:songs,id',
            'attached_songs.*.song_number' => 'integer',
            'detached_songs' => 'array',
        ];
    }
}
