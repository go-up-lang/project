<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    // 대량 할당 가능한 필드
    protected $fillable = [
        'userName',
        'userBirthday',
        'userId',
        'userPwd',
        'userPhone',
        'userPhoneCheck',
        'created_at',
    ];

    // 타임스탬프 사용 여부
    public $timestamps = false;
}
