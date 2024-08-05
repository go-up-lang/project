<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <form action="/signup" method="POST">
        @csrf
        <div class="mb-3">
                <p>
                    <label for="user-name" class="form-label">이름</label>
                    <input id="user-name" name="user-name" value="윤규선" class="form-control"/>
                </p>
                <p>
                    <label class="form-label">생년월일</label>
                    <select id="year" name="year" class="form-control"></select>
                    <select id="month" name="month" class="form-control"></select>
                    <select id="day" name="day" class="form-control"></select>
                </p>
                <p>
                    <label for="user-id" class="form-label">아이디</label>
                    <input id="user-id" name="user-id" value="dbsrbtjs" class="form-control"/>
                    <button type="button" class="btn btn-secondary" onclick="idDuplicateCheck()">아이디 중복 검사</button>
                </p>
                <p>
                    <label for="user-pwd" class="form-label">패스워드</label>
                    <input id="user-pwd" type="password" name="user-pwd" value="1" class="form-control"/>
                </p>
                <p>
                    <label for="user-pwd-check" class="form-label">패스워드 확인</label>
                    <input id="user-pwd-check" type="password" name="user-pwd-check" value="1" class="form-control"/>
                </p>
                <p>
                    <label for="user-phone" class="form-label">연락처</label>
                    <input id="user-phone" type="tel" name="user-phone" value="010-9055-3411" class="form-control"/>
                </p>
                <p>
                    <label for="user-phone-check" class="form-label">연락처 동의</label>
                    <input type="hidden" name="user-phone-check" value="0"/>
                    <input id="user-phone-check" type="checkbox" name="user-phone-check" value="1"/>                    
                </p>
        </div>
                <button type="submit" onclick="inputCheck(event)">회원가입</button>
        <a href="/login"><button type="button">회원가입 취소</button></a>
    </form>
    
    <script src="{{ ('js/signup.js') }}" defer></script>
</body>
</html>