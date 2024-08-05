<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'user-name' => 'required|string|max:255',
            'year' => 'required|integer',
            'month' => 'required|integer',
            'day' => 'required|integer',
            'user-id' => 'required|string|max:255',
            'user-pwd' => 'required|string|min:1',
            'user-phone' => 'required|string',
            'user-phone-check' => 'required|in:0,1',
        ]);

        
    $user = new User();
        $user->userName = $validatedData['user-name'];
        $user->userBirthday = "{$validatedData['year']}-{$validatedData['month']}-{$validatedData['day']}";
        $user->userId = $validatedData['user-id'];
        $user->userPwd = $validatedData['user-pwd'];
        $user->userPhone = $validatedData['user-phone'];
        $user->userPhoneCheck = $validatedData['user-phone-check'];
        $user->created_at = now();

  
        if($user->save()){
            return redirect('/login');
        } else {
            return redirect('/signup')->with('error', '회원가입이 완료되지 않았습니다');            
        }
    
    }
}
