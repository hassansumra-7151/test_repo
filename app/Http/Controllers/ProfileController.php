<?php

// app/Http/Controllers/ProfileController.php
namespace App\Http\Controllers;

use App\Models\User;

class ProfileController extends Controller
{
    public function showProfile($user_id)
    {
        $user = User::find($user_id);

        if ($user) {
            // User mil gaya hai, ab profile data retrieve karein
            $profile = $user->profile;

            if ($profile) {
                // Yahan pe profile data hai, jise ap use kar sakte hain
                return view('profile.show', compact('user', 'profile'));
            }
        }

        // Agar user ya profile nahi mila toh kuch default logic implement karein
        return view('profile.not_found');
    }


    public function geting($user_id)
    {
        $user = User::find($user_id);

        if ($user) {
            // User mil gaya hai, ab profile data retrieve karein
            $profile = $user->profile;

            if ($profile) {
                // Yahan pe profile data hai, jise ap use kar sakte hain
                return view('profile.show', compact('user', 'profile'));
            }
        }

        // Agar user ya profile nahi mila toh kuch default logic implement karein
        return view('profile.not_found');
    }
}
