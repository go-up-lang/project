<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Session; // 세션 사용을 위한 import

class LoginController extends Controller
{
    public function logined(Request $request){
        $id = $request->input('id');
        $password = $request->input('pwd');

        $user = User::where('userId', $id)
                    ->where('userPwd', $password)
                    ->first();

        if($user){
            Session::put('user', $user);
            
            return redirect('/');
        }else{
            return redirect('/login')->with('logined-error1', '회원가입된 아이디 또는 비밀번호가 없습니다.');;
        }
    }
}
