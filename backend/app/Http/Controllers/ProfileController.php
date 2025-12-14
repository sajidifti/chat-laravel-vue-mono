<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function me()
    {
        return response()->json(auth()->user());
    }

    public function update(ProfileUpdateRequest $request)
    {
        $profile = auth()->user();

        if ($request->hasFile('profile_photo')) {
            $profile->updateProfilePhoto($request->file('profile_photo'));
        }

        $profile->update($request->except('profile_photo'));

        return response()->json($profile);
    }
}
