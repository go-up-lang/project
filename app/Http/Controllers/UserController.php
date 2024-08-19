<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
            'user-phone-check' => 'required|in:0,8',
        ]);

        $existUserId = User::where('userId', $validatedData['user-id'])->first();

        if($existUserId){
            return redirect('/signup')->with('signup-error1', '동일한 아이디가 있습니다.');
        }else{
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
                return redirect('/signup')->with('signup-error2', '회원가입이 정상적으로 실행되지 않았습니다');            
            }
        }
    }   

    public function checkUserId(Request $request){
        $userId = $request->input('user_id');
        $exists = User::where('userId', $userId)->exists(); //exist와 first의 차이 전체를 찾을떈 first 단지 여부를 찾을땐 exist를 사용한다고 한다.

        // JSON 형태로 결과를 반환합니다.
        return response()->json(['exists' => $exists]);
    }
}
