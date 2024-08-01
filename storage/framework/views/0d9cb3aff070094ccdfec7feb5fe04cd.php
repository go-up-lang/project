<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/board.css')); ?>">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">🤫</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-menu" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">자유 게시판</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Q&A</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a class="nav-link" href="<?php echo e(url('/login')); ?>">Login</a>
      </span>
    </div>
  </div>
</nav>

<main>
<div class="container-fluid text-center mainContainer">
  <div class="row">
    <div class="col-2 mainLeft">
        <p>메뉴</p>
        <ul>
            <li><a href="">#첫 번째 메뉴</a></li>
            <li><a href="">#두 번째 메뉴</a></li>
        </ul>

        <p>메뉴</p>
        <ul>
            <li><a href="">#첫 번째 메뉴</a></li>
            <li><a href="">#두 번째 메뉴</a></li>
        </ul>
    </div>
    <div class="col-8 mainCenter">
        <div class="row mainSection">
            <div class="col">
                Column
            </div>
        </div>
        <div class="row  mainSection">
            <div class="col">
                Column
            </div>
        </div>
        <div class="row subSection">
            <div class="col">
                Column
            </div>
            <div class="col">
                Column
            </div>
        </div>
        <div class="row subSection">
            <div class="col">
                Column
            </div>
            <div class="col">
                Column
            </div>
        </div>

    </div>
    <div class="col mainRight">
      <button>글쓰기</button>

    </div>
  </div>
</div>   
    <div class="chatSection">
        <div class="weatherBox">
            weather
        </div>
        <button class="chatButton">Chat</button>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH /var/www/project/resources/views/board.blade.php ENDPATH**/ ?>