<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\LoginFormRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;

    public function login(LoginFormRequest $request)
    {
        if (! Auth::attempt($request->only(['email', 'password']))) {
            return $this->error(
                'Email or Password does not match with our record.',
            );
        }
        $user = new UserResource(User::where('email', $request->email)->first());
        $data = [
            'user' => $user,
            'token' => $user->createToken('AUTH_TOKEN')->plainTextToken,
        ];

        return $this->success(
            'User Logged In Successfully.',
            $data
        );
    }

    public function logout()
    {
        request()->user()->currentAccessToken()->delete();

        return $this->success(
            'User Logged Out Successfully.',
            [],
            200
        );
    }

    public function me()
    {
        return $this->success(
            'User Informations Retrieved Successfully.',
            [
                'user' => UserResource::make(request()->user()),
            ],
            200
        );
    }
}
