<?php

namespace App\Http\Controllers;

use App\Exceptions\APIException;
use App\Models\User;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function getToken(LoginUserRequest $request)
    {
        $data = $request->validated();

        if (!Auth::attempt(['email' => $data["email"], "password" => $data["password"]])) {
            $data = [
                'data' => [
                    'status' => 401,
                    'error' => 'Not right password or login'
                ]
            ];

            return response()->json($data)->setStatusCode(401);
        }

        $user = User::where('email', $data["email"])->first();

        $token = $user->createToken('access_token', ['song-edit'])->plainTextToken;
        $data = [
            'data' => [
                'token' => $token,
            ]
        ];

        return response()->json($data)->setStatusCode(200);
    }
}
