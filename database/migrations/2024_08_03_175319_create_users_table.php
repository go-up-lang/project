<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // 기본 키 (자동 증가 ID)
            $table->string('userName');
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');
            $table->string('userId')->unique();
            $table->string('userPwd');
            $table->string('userPwdCheck');
            $table->string('userPhone');
            $table->boolean('userPhoneCheck')->default(false);
            $table->timestamps(); // created_at 및 updated_at 타임스탬프
            $table->softDeletes(); // deleted_at 필드 추가
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
