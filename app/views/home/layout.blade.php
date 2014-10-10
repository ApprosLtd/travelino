<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
  <title>Laravel PHP Framework</title>
  <link rel="stylesheet" type="text/css" href="/packages/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/fix2.css">
</head>
<body>
  <div class="container">
    <div class="row" style="margin: 20px 0;">
      <div class="col-lg-2">
        <section class="flymenu">
          <header>
            <h1><span>Навигация</span></h1>
          </header>
          <nav>
            <ul>
              <li><a href="/"><span>Главная</span></a></li>
              <li><a class="active" href="/countries"><i class="people_16"></i><span>Страны</span></a></li>
              <li><a href="/cities"><i class="songs_16"></i><span>Города</span></a></li>
              <li><a href="/places"><i class="radio_16"></i><span>Места</span></a></li>
              <li>.</li>
              <li><a href="/airports"><i class="mixes_16"></i><span>Авиабилеты</span></a></li>
              <li><a href="/hotels"><i class="video_16"></i><span>Гостиницы</span></a></li>
              <li>.</li>
              <li><a href="/tours"><i class="radio_16"></i><span>Туры</span></a></li>
              <li><a href="/trails"><i class="radio_16"></i><span>Маршруты</span></a></li>
            </ul>
          </nav>
        </section>
        @include('home.share')
        <div style="text-align: center; margin-top: 20px;">
        
          <img src="http://counter.yadro.ru/logo?29.7" alt="">

        </div>
      </div>
      <div class="col-lg-10 row" id="dynamic-content">
      {{$content}}   
      </div>
    </div>
    @include('home.common.metrika')
  </div>
</body>
</html>
