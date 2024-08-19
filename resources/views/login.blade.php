<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="/logined" method="POST">
        @csrf
        <div class ="p-3">
            <div class="form-group">
                <label for="id">아이디</label> <input type="text" id="id" name="id" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="pwd">비밀번호</label> <input type="password" id="pwd" name="pwd" class="form-control"/>
            </div>
            @if (session('logined-error1'))
                <div class="alert alert-danger">
                    {{ session('logined-error1') }}
                </div>
            @endif

            <div class="">
                <input type="checkbox" id="login-maintain" value="1" class="form-check-input"/> <label for="login-maintain">로그인 유지</label>
                <button type="submit" class="btn btn-primary"> 로그인 </button>
            </div>
        </div>
    </form>
        <a href="/signup"><button class="btn btn-primary"> 회원가입 </button></a>
</body>
</html>




