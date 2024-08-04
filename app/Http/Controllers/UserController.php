<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signuped(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'user-name' => 'required|string|max:255',
            'year' => 'required',
            'month' => 'required',
            'day' => 'required',
            'user-id' => 'required|string|max:255',
            'user-pwd' => 'required|string|min:6',
            'user-phone' => 'required|string',
            'user-phone-check' => 'accepted',
        ]);

        
    }
}
