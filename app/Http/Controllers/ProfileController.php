<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $tweets = auth()->user()->timeline();

        return view('profiles.show', compact('user', 'tweets'));
    }
}
