<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="/logined" method="POST">
        <?php echo csrf_field(); ?>
        <p>아이디 : <input type="text" id="id" name="id" /></p>
        <p>비밀번호 : <input type="password" id="pwd" name="pwd" /></p>
        <input type="checkbox" id="login-maintain" value="1"/> <label for="login-maintain">로그인 유지</label>
        <button type="submit"> 로그인 </button>
    </form>
</body>
</html>
<?php /**PATH /var/www/project/resources/views/login.blade.php ENDPATH**/ ?>