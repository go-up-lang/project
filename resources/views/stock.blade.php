<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">🤫</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-menu" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">국내증시</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">차트</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">뉴스</a>
                    </li>
                </ul>
                <div class="navRight">
                    <span class="navbar-text">
                        <a class="nav-link" href="#">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid bannerBox">
        <div class="newsSection">
            
        </div>
        <div class="input-group">
            <button class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input type="text" class="form-control search-input" placeholder="Enter Your Search">
        </div>
    </div>
    <div class="container-fluid stockSection">
        <div class="row">
            <div class="col">
              <ul class="tabs">
                <li class="tab-list" id="kospi">코스피</li>
                <li class="tab-list" id="kosdaq">코스닥</li>
              </ul>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">종목명</th>
                            <th scope="col">종가</th>
                            <th scope="col">고가</th>
                            <th scope="col">저가</th>
                            <th scope="col">시가</th>
                            <th scope="col">전일</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider tab__content-wrapper tab-item" id="stock-board-kospi">

                    </tbody>

                    <tbody class="table-group-divider tab__content-wrapper tab-item" id="stock-board-kosdaq">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b4957b2c73.js" crossorigin="anonymous"></script>
    <script src="{{ ('js/main.js') }}" defer></script>
</body>
</html>