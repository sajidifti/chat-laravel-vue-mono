<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        try {
            $user = User::create($request->validated());

            $data = [
                'user' => $user,
                'token' => $user->createToken('auth_token')->plainTextToken,
            ];

            return response()->json($data);
        } catch (Exception $e) {
            Log::error('Registration failed: '.$e->getMessage());

            return response()->json(['message' => 'Registration failed'], 500);
        }
    }

    public function login(LoginRequest $request)
    {
        try {
            if (!Auth::attempt($request->validated())) {
                return response()->json(['message' => 'Invalid Credentials'], 401);
            }

            $user = Auth::user();
            $data = [
                'user' => $user,
                'token' => $user->createToken('auth_token')->plainTextToken,
            ];

            return response()->json($data);
        } catch (Exception $e) {
            Log::error('Login failed: '.$e->getMessage());

            return response()->json(['message' => 'Login failed'], 500);
        }
    }
}
