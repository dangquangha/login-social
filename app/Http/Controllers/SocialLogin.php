<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLogin extends Controller
{
    public function loginSocial($driver = 'google')
    {
        return Socialite::driver($driver)->redirect();
    }

    public function loginSocialCallback(Request $request, $driver = 'google')
    {
        $socialiteProfile = Socialite::driver($driver)->user();
        dd($socialiteProfile);
    }
}
