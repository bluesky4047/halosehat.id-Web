<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        // Dummy user data
        $user = [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone_number' => '+62 812-3456-7890',
            'address' => 'Jl. Example No. 123, Jakarta',
            'profile_image' => 'https://via.placeholder.com/150',
            'created_at' => '2025-05-01 08:00:00',
            'updated_at' => '2025-05-25 10:00:00',
        ];

        return view('profile.account', compact('user'));
    }
}