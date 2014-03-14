<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  <script type="text/javascript" src="/packages/jquery/jquery-2.1.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/packages/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="/packages/handlebars/handlebars-v1.3.0.js"></script>
  <script type="text/javascript" src="/packages/ember/ember-1.4.0.js"></script>
  <script type="text/javascript" src="/packages/ember/ember-data.js"></script>
  <script type="text/javascript" src="/app.js?foo=<?= rand(1000, 9999) ?>"></script>
  
  <link rel="stylesheet" type="text/css" href="/global.min.css">
  <link rel="stylesheet" type="text/css" href="/sprite.min.css">
  <link rel="stylesheet" type="text/css" href="/fix.css">
  
  <script type="text/javascript" src="/packages/custom-scrollbar/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="/packages/custom-scrollbar/jquery.mCustomScrollbar.js"></script>
  <link rel="stylesheet" type="text/css" href="/packages/custom-scrollbar/jquery.mCustomScrollbar.css">
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
        <footer>
          <div class="scroller-box">
            <div class="scroller-handle"></div>
          </div>
          <section>
          </section>
          <section class="copyright">
            copyright@foo.bar
          </section>
        </footer>
      </div>
  </script>
  
  <script type="text/x-handlebars" id="continents">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Континенты</h1>
      </div>
    </div>
    <div class="content-side full-height"></div>
  </script>
  
  <script type="text/x-handlebars" id="countries">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Страны</h1>
      </div>
    </div>
    <div class="covert-side full-height">
    {{outlet}}
    </div>
    <div class="content-side full-height scrollbar">
    <ol>
    {{#each}}
      <li class="roll-item">
        <div class="roll-image"><img alt="" src="http://lorempixel.com/300/300/city/?i={{id}}"></div>
        <div class="roll-info"><div class="roll-info-wrapper">
          <div class="roll-info-wrp-top">
            <h2>{{name}}</h2>
            <h3>{{#link-to 'country' this}}Евразия{{/link-to}}</h3>
          </div>
          <div class="roll-info-wrp-bottom">
            В первом примере мы будем использовать только некоторые базовые переходы, чтобы создать неплохой эффект при наведении курсора
          </div>
          <div class="roll-info-wrp-stat">
              2000
          </div>
          <div class="roll-info-hoverer">
            <a class="btn btn-primary" {{action 'briefAboutCity'}}>Коротко</a>
            {{#link-to 'country' this class='btn btn-primary'}}Подробнее{{/link-to}}
            <a class="btn btn-primary">***</a>
          </div>
        </div></div>
      </li>
    {{/each}}
    </ol>
    </div>
  </script>
  
  <script type="text/x-handlebars" id="country">
  <div class="covert-side-wrapper">
    <div>
      <img alt="" style="width:100%" src="http://lorempixel.com/600/300/city?i=3">
    </div>
    <section style="padding: 10px">
      <h2>{{name}}</h2>
      <h3>Чехия</h3>
    </section>
    <div class="place-information">
      <section>
       <p>Испания располагается на Пиренейском полуострове и омывается Средиземным морем и Атлантическим океаном. В ее состав входят Балеарские и Канарские острова.</p>
       <p>Испания – государство с очень древней культурой и благоприятным климатом. Туры в Испанию – это посещение разнообразных курортов с высокоразвитой инфраструктурой и обширной программой экскурсий.</p>
       <h4>Валюта</h4>
       <p>Испания — член Евросоюза, официальной валютой страны является евро (€), равный 100 центам.
Обменять валюту можно в банках, банкоматах, обменных пунктах, гостиницах и бюро путешествий. Большинство банков работают пн.-пт. с 8.30 до 14.30, в субботу с 8.30 до 13.00, обменные пункты с 8.30 до 19.00 (некоторые до 20.00), банкоматы работают круглосуточно. Наибольший курс при обмене валют в банках, в обменных пунктах при аэропортах, вокзалах, магазинах и т.п. курс будет менее выгодным. Также стоит помнить, что большинство банков берет комиссию за услугу обмена, при снятии денег через банкомат также будет комиссия.</p>
       <h4>Государственный язык</h4>
       <p>Официальный язык - испанский. В некоторых областях и провинциях жители говорят на древних местных языках, например в Каталонии, Стране Басков и т.д.</p>
       <h4>Население</h4>
       <p>Население Испании, по состоянию на 2008 год, составляет 46,06 млн. чел. Примерно 9% населения составляют эмигранты. Городское население — 76 %. Плотность населения — 79,7 чел./км?.</p>
       <h4>Климат</h4>
       <p>В Испании выделяют три типа климата: умеренный морской на северо-западе и севере; средиземноморский на юге и побережье Средиземного моря; аридный континентальный климат во внутренних районах страны.</p>
       <p>Испания является одним из самых тёплых государств в Западной Европе. Среднее количество солнечных дней составляет 260—280. Среднегодовая температура почти всей испанской территории колеблется между 14 и 19 ° С выше нуля. Средние температуры января варьируются от 8 – 10 °С в северной и средней части до 10 – 12 ° С в южной части. Средние температуры июля – наиболее жаркого месяца – достигают 18 – 20 ° С в прибрежных районах северо – запада и севера страны и 26 ° С – в средиземноморских прибрежных районах.</p>
       <p>Наилучшее время для туризма с конца весны до начала осени.</p>
       <h4>Местоположение</h4>
       <p>Испания – государство на юго-западе Европы, которое занимает большую часть Пиренейского полуострова, Балеарские острова в Средиземном море, Канарские острова в Атлантическом океане. Испания граничит на западе с Португалией (длина границы 1214 км), на севере — с Францией (623 км) и Андоррой (65 км), на юге — с Гибралтаром (1,2 км). Испания омывается на востоке и юге Средиземным морем, на западе — Атлантическим океаном, на севере — Бискайским заливом (Кантабрийским морем). На побережье Испании насчитывается более двух тысяч пляжей. 
Общая площадь Испании 504 782 км? (площадь суши — 499 400 км?). Общая протяжённость границы 1903,2 км, длина береговой линии 4964 км.</p>
       <h4>Государственное устройство</h4>
       <p>Форма правления - Конституционная монархия. Главой государства является король, который по представлению премьер-министра утверждает членов кабинета министров. Испания разделена на 52 провинции, объединенных в 17 автономных областей</p>
      </section>
    </div>
  </div>
  </script>
  
  <script type="text/x-handlebars" id="cities">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Города</h1>
      </div>
    </div>
    <div class="covert-side full-height">
    {{outlet}}
    </div>
    <div class="content-side full-height scrollbar">
    <ol>
    {{#each}}
      <li class="roll-item">
        <div class="roll-image"><img alt="" src="http://lorempixel.com/300/300/city/?i={{id}}"></div>
        <div class="roll-info"><div class="roll-info-wrapper">
          <div class="roll-info-wrp-top">
            <h2>{{name}}</h2>
            <h3>{{#link-to 'country' this}}Россия{{/link-to}}</h3>
          </div>
          <div class="roll-info-wrp-bottom">
            В первом примере мы будем использовать только некоторые базовые переходы, чтобы создать неплохой эффект при наведении курсора
          </div>
          <div class="roll-info-wrp-stat">
              2000
          </div>
          <div class="roll-info-hoverer">
            <a class="btn btn-primary" {{action 'briefAboutCity'}}>Коротко</a>
            {{#link-to 'city' this class='btn btn-primary'}}Подробнее{{/link-to}}
            <a class="btn btn-primary">***</a>
          </div>
        </div></div>
      </li>
    {{/each}}
    </ol>
    </div>
  </script>
  
  <script type="text/x-handlebars" id="city">
  <div class="covert-side-wrapper">
    <div>
      <img alt="" style="width:100%" src="http://lorempixel.com/600/300/city?i=3">
    </div>
    <section style="padding: 10px">
      <h2>{{name}}</h2>
      <h3>Чехия</h3>
    </section>
    <div class="place-information">
      <section>
       <p>Испания располагается на Пиренейском полуострове и омывается Средиземным морем и Атлантическим океаном. В ее состав входят Балеарские и Канарские острова.</p>
       <p>Испания – государство с очень древней культурой и благоприятным климатом. Туры в Испанию – это посещение разнообразных курортов с высокоразвитой инфраструктурой и обширной программой экскурсий.</p>
       <h4>Валюта</h4>
       <p>Испания — член Евросоюза, официальной валютой страны является евро (€), равный 100 центам.
Обменять валюту можно в банках, банкоматах, обменных пунктах, гостиницах и бюро путешествий. Большинство банков работают пн.-пт. с 8.30 до 14.30, в субботу с 8.30 до 13.00, обменные пункты с 8.30 до 19.00 (некоторые до 20.00), банкоматы работают круглосуточно. Наибольший курс при обмене валют в банках, в обменных пунктах при аэропортах, вокзалах, магазинах и т.п. курс будет менее выгодным. Также стоит помнить, что большинство банков берет комиссию за услугу обмена, при снятии денег через банкомат также будет комиссия.</p>
       <h4>Государственный язык</h4>
       <p>Официальный язык - испанский. В некоторых областях и провинциях жители говорят на древних местных языках, например в Каталонии, Стране Басков и т.д.</p>
       <h4>Население</h4>
       <p>Население Испании, по состоянию на 2008 год, составляет 46,06 млн. чел. Примерно 9% населения составляют эмигранты. Городское население — 76 %. Плотность населения — 79,7 чел./км?.</p>
       <h4>Климат</h4>
       <p>В Испании выделяют три типа климата: умеренный морской на северо-западе и севере; средиземноморский на юге и побережье Средиземного моря; аридный континентальный климат во внутренних районах страны.</p>
       <p>Испания является одним из самых тёплых государств в Западной Европе. Среднее количество солнечных дней составляет 260—280. Среднегодовая температура почти всей испанской территории колеблется между 14 и 19 ° С выше нуля. Средние температуры января варьируются от 8 – 10 °С в северной и средней части до 10 – 12 ° С в южной части. Средние температуры июля – наиболее жаркого месяца – достигают 18 – 20 ° С в прибрежных районах северо – запада и севера страны и 26 ° С – в средиземноморских прибрежных районах.</p>
       <p>Наилучшее время для туризма с конца весны до начала осени.</p>
       <h4>Местоположение</h4>
       <p>Испания – государство на юго-западе Европы, которое занимает большую часть Пиренейского полуострова, Балеарские острова в Средиземном море, Канарские острова в Атлантическом океане. Испания граничит на западе с Португалией (длина границы 1214 км), на севере — с Францией (623 км) и Андоррой (65 км), на юге — с Гибралтаром (1,2 км). Испания омывается на востоке и юге Средиземным морем, на западе — Атлантическим океаном, на севере — Бискайским заливом (Кантабрийским морем). На побережье Испании насчитывается более двух тысяч пляжей. 
Общая площадь Испании 504 782 км? (площадь суши — 499 400 км?). Общая протяжённость границы 1903,2 км, длина береговой линии 4964 км.</p>
       <h4>Государственное устройство</h4>
       <p>Форма правления - Конституционная монархия. Главой государства является король, который по представлению премьер-министра утверждает членов кабинета министров. Испания разделена на 52 провинции, объединенных в 17 автономных областей</p>
      </section>
    </div>
  </div>
  </script>
  
  <script type="text/x-handlebars" id="airports">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Аэропорты</h1>
      </div>
    </div>
    <div class="content-side full-height"></div>
  </script>
  
  <script type="text/x-handlebars" id="hotels">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Отели</h1>
      </div>
    </div>
    <div class="content-side full-height"></div>
  </script>
  
  <script type="text/x-handlebars" id="tours">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Туры</h1>
      </div>
    </div>
    <div class="content-side full-height"></div>
  </script>
  
  <script type="text/x-handlebars" id="places">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Места</h1>
      </div>
    </div>
    <div class="content-side full-height"></div>
  </script>
  
  <script type="text/x-handlebars" id="trails">
    <div class="intro-side full-height">
      <div class="intro-wrapper">
        <h1 class="intro-title">Маршруты</h1>
      </div>
    </div>
    <div class="content-side full-height"></div>
  </script>


</body>
</html>