<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class APIException extends HttpResponseException
{
    public function __construct($code = 422, $message = "Validation error", $errors = [])
    {
        $data = [
            'error' => [
                'code' => $code,
                'message' => $message
            ]
        ];

        if (!empty($errors)) {
            $data['error']['errors'] = $errors;
        }

        parent::__construct(response()->json($data)->setStatusCode($code));
    }
}
