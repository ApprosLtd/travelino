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
              <li><a id="ember446" class="ember-view" href="/continents"><i class="trending_16"></i><span>Континенты</span></a></li>
              <li><a id="ember454" class="ember-view active" href="/countries"><i class="people_16"></i><span>Страны</span></a></li>
              <li><a id="ember468" class="ember-view" href="/cities"><i class="songs_16"></i><span>Города</span></a></li>
              <li><a id="ember469" class="ember-view" href="/places"><i class="radio_16"></i><span>Места</span></a></li>
              <li>.</li>
              <li><a id="ember477" class="ember-view" href="/airports"><i class="mixes_16"></i><span>Авиабилеты</span></a></li>
              <li><a id="ember485" class="ember-view" href="/hotels"><i class="video_16"></i><span>Гостиницы</span></a></li>
              <li>.</li>
              <li><a id="ember493" class="ember-view" href="/tours"><i class="radio_16"></i><span>Туры</span></a></li>
              <li><a id="ember501" class="ember-view" href="/trails"><i class="radio_16"></i><span>Маршруты</span></a></li>
            </ul>
          </nav>
        </section>
      </div>
      <div class="col-lg-10 row" id="dynamic-content">
      {{$content}}   
      </div>
    </div>
  </div>
<!-- templates -->
@include('home.templates')
<!-- /templates -->
<!-- scripts -->
@include('home.scripts')
<!-- /scripts -->
</body>
</html>
