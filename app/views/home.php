<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/packages/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="/packages/handlebars/handlebars-v1.3.0.js"></script>
  <script type="text/javascript" src="/packages/ember/ember-1.4.0.js"></script>
  <script type="text/javascript" src="/packages/ember/ember-data.js"></script>
  <script type="text/javascript" src="/app.js?foo=<?= rand(1000, 9999) ?>"></script>
  
  <link rel="stylesheet" type="text/css" href="/global.min.css">
  <link rel="stylesheet" type="text/css" href="/sprite.min.css">
  <link rel="stylesheet" type="text/css" href="/fix.css">
</head>
<body>
  
  <script type="text/x-handlebars">
      <div class="full-height">
        <section id="sidebar">
          <header>
            <h1><span>Навигация</span></h1>
          </header>
          <nav>
            <ul>
              <li>{{#link-to 'continents'}}<i class="trending_16"></i><span>Континенты</span>{{/link-to}}</li>
              <li>{{#link-to 'countries'}}<i class="people_16"></i><span>Страны</span>{{/link-to}}</li>
              <li>{{#link-to 'cities'}}<i class="songs_16"></i><span>Города</span>{{/link-to}}</li>
              <li>.</li>
              <li>{{#link-to 'airports'}}<i class="mixes_16"></i><span>Аэропорты</span>{{/link-to}}</li>
              <li>{{#link-to 'hotels'}}<i class="video_16"></i><span>Гостиницы</span>{{/link-to}}</li>
              <li>.</li>
              <li>{{#link-to 'tours'}}<i class="radio_16"></i><span>Туры</span>{{/link-to}}</li>
              <li>{{#link-to 'places'}}<i class="radio_16"></i><span>Места</span>{{/link-to}}</li>
              <li>{{#link-to 'trails'}}<i class="radio_16"></i><span>Маршруты</span>{{/link-to}}</li>
            </ul>
          </nav>
        </section>
        <div class="layout full-height">
          {{outlet}}
        </div>
      </div>
  </script>
  
  <script type="text/x-handlebars" id="continents">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Континенты</h1>
      </div>
    </div>
    <div class="content-side"></div>
  </script>
  
  <script type="text/x-handlebars" id="countries">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Страны</h1>
      </div>
    </div>
    <div class="content-side"></div>
  </script>
  
  <script type="text/x-handlebars" id="cities">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Города</h1>
      </div>
    </div>
    <div class="content-side">
    {{#each}}
      <div>{{name}}</div>
    {{/each}}
    </div>
  </script>
  
  <script type="text/x-handlebars" id="airports">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Аэропорты</h1>
      </div>
    </div>
    <div class="content-side"></div>
  </script>
  
  <script type="text/x-handlebars" id="hotels">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Отели</h1>
      </div>
    </div>
    <div class="content-side"></div>
  </script>
  
  <script type="text/x-handlebars" id="tours">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Туры</h1>
      </div>
    </div>
    <div class="content-side"></div>
  </script>
  
  <script type="text/x-handlebars" id="places">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Места</h1>
      </div>
    </div>
    <div class="content-side"></div>
  </script>
  
  <script type="text/x-handlebars" id="trails">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Маршруты</h1>
      </div>
    </div>
    <div class="content-side"></div>
  </script>


</body>
</html>