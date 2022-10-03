<?php

namespace App\Http\Requests;

use App\Exceptions\APIException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;


class APIRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return void
     * @throws APIException
     */
    public function failedAuthorization(): void
    {
        throw new APIException(401, "Authentication failed");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @param Validator $validator
     * @return void
     * @throws APIException
     */
    public function failedValidation(Validator $validator): void
    {
        throw new APIException(422, "Validation error", $validator->errors());

    }
}
