<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        return view('account', [
            'title' => 'Edit Profile',
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        // Tangani upload gambar seperti di RegisterController
        if ($request->hasFile('profile_image')) {
            // Hapus gambar lama jika ada
            if ($user->profile_image && file_exists(public_path($user->profile_image))) {
                unlink(public_path($user->profile_image));
            }

            $imageName = time().'_'.$request->file('profile_image')->getClientOriginalName();
            $request->file('profile_image')->move(public_path('uploads/profile_images'), $imageName);
            $validated['profile_image'] = 'uploads/profile_images/' . $imageName;
        }

        // Update user fields using query builder if $user is not an Eloquent model
        DB::table('users')
            ->where('id', $user->id)
            ->update([
                'name' => $validated['name'],
                'phone_number' => $validated['phone_number'],
                'address' => $validated['address'],
                'profile_image' => isset($validated['profile_image']) ? $validated['profile_image'] : $user->profile_image,
            ]);

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
