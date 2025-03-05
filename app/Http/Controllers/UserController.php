<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10'],
            'email' => 'required',
            'password' => ['required', 'min:8', 'max:20']
        ]);
        return "Controller";
    }
}
