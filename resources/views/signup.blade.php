<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <form action="/include/signuped" method="POST">
        @csrf
        <p>
            <label for="user-name">이름</label>
            <input id="user-name" name="user-name" value="윤규선"/>
        </p>
        <p>
            <label>생년월일</label>
            <select id="year" name="year" ></select>
            <select id="month" name="month" ></select>
            <select id="day" name="day" ></select>
        </p>
        <p>
            <label for="user-id">아이디</label>
            <input id="user-id" name="user-id" value="dbsrbtjs"/>
        </p>
        <p>
            <label for="user-pwd">패스워드</label>
            <input id="user-pwd" type="password" name="user-pwd" value="1"/>
        </p>
        <p>
            <label for="user-pwd-check">패스워드 확인</label>
            <input id="user-pwd-check" type="password" name="user-pwd-check" value="1"/>
        </p>
        <p>
            <label for="user-phone">연락처</label>
            <input id="user-phone" type="tel" name="user-phone" value="010-9055-3411"/>
        </p>
        <p>
            <label for="user-phone-check">연락처 동의</label>
            <input id="user-phone-check" type="checkbox" name="user-phone-check" value="1" checked/>
        </p>
        <button type="submit" onclick="inputCheck(event)">회원가입</button>
        <a href="/login"><button type="button">회원가입 취소</button></a>
    </form>
    
    <script src="{{ ('js/signup.js') }}" defer></script>
</body>
</html>