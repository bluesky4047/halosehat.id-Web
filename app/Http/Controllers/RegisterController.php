<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register', ['title' => 'Register']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string',
            'password' => 'required|confirmed|min:8',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $imageName = time().'_'.$request->file('profile_image')->getClientOriginalName();
            $request->file('profile_image')->move(public_path('uploads/profile_images'), $imageName);
            $validated['profile_image'] = 'uploads/profile_images/' . $imageName;
        }

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/signIn')->with('success', 'Account created successfully. Please sign in.');
    }
}
