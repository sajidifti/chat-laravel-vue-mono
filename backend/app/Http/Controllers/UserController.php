<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\ListUserRequest;


class UserController extends Controller
{
    public function index(ListUserRequest $request)
    {
        $query = User::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        $limit = $request->input('limit', 10);
        $users = $query->paginate($limit)->withQueryString();

        return response()->json($users);
    }
}
