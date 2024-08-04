<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 결과</title>
</head>
<body>
    <h1>회원가입 결과</h1>
    <p>이름: {{ $userName }}</p>
    <p>생년월일: {{ $year }}년 {{ $month }}월 {{ $day }}일</p>
    <p>아이디: {{ $userId }}</p>
    <p>패스워드: {{ $userPwd }}</p>
    <p>패스워드 확인: {{ $userPwdCheck }}</p>
    <p>연락처: {{ $userPhone }}</p>
    <p>연락처 동의: {{ $userPhoneCheck ? '동의함' : '동의하지 않음' }}</p>
</body>
</html>
