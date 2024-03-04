<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiUserLoginRequest;
use App\Http\Requests\ApiUserRegisterRequest;
use App\Http\Resources\ApiUserResource;
use App\Models\User;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;


class UserApiController extends Controller
{
    public function register(ApiUserRegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        if (User::where('email', $data['email'])->count() == 1) {
            throw new HttpResponseException(response([
                "errors" => [
                    "email" => [
                        "email telah terdaftar"
                    ]
                ]
            ], 400));
        }

        $user = new User($data);
        $user->password = Hash::make($data['password']);
        $user->save();

        return (new ApiUserResource($user))->response()->setStatusCode(201);
    }

    public function login(ApiUserLoginRequest $request): JsonResponse
    {
        $data = $request->validated();

        $user = User::where('email', $data['email'])->first();
        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw new HttpResponseException(response([
                "errors" => [
                    "message" => [
                        "email atau password salah"
                    ]
                ]
            ], 401));
        }

        $user->remember_token = Str::uuid()->toString();
        $user->save();

        $user->assignRole('Customer');
        event(new Registered($user));

        return (new ApiUserResource($user))->response()->setStatusCode(200);;
    }
}
