<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return view('profile.show', compact('user'));
    }
}
