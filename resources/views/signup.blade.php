<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>회원가입</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    
    <form action="/signup" method="POST">
        @csrf
        <div class="mb-3">
                <p>
                    <label for="user-name" class="form-label">이름</label>
                    <input id="user-name" name="user-name" class="form-control"/>
                </p>
                <p>
                    <label class="form-label">생년월일</label>
                    <select id="year" name="year" class="form-control"></select>
                    <select id="month" name="month" class="form-control"></select>
                    <select id="day" name="day" class="form-control"></select>
                </p>
                <p>
                    <label for="user-id" class="form-label">아이디</label>
                    <input id="user-id" name="user-id" class="form-control" onchange="resetCheckUserId()"/>
                        @if (session('signup-error1'))
                            <div class="alert alert-danger">
                                {{ session('signup-error1') }}
                            </div>
                        @endif
                    <button type="button" class="btn btn-secondary" onclick="checkUserId()">아이디 중복 검사</button>
                    <div class="" id="exist"></div>
                    <input type="hidden" id="check-user-id" name="check-user-id" value="0"/>
                </p>
                <p>
                    <label for="user-pwd" class="form-label">패스워드</label>
                    <input id="user-pwd" type="password" name="user-pwd"  class="form-control"/>
                </p>
                <p>
                    <label for="user-pwd-check" class="form-label">패스워드 확인</label>
                    <input id="user-pwd-check" type="password" name="user-pwd-check" class="form-control"/>
                </p>
                <p>
                    <label for="user-phone" class="form-label">연락처</label>
                    <input id="user-phone" type="tel" name="user-phone" class="form-control"/>
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
            @if (session('signup-error2'))
                <div class="alert alert-danger">
                    {{ session('signup-error2') }}
                </div>
            @endif
    
    <script src="{{ ('js/signup.js') }}" defer></script>
</body>
</html>