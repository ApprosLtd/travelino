<div class="full-height">
<section class="flymenu">
  <header>
    <h1><span>Навигация</span></h1>
  </header>
  <nav>
    <ul>
      <li>{{#link-to 'continents'}}<i class="trending_16"></i><span>Континенты</span>{{/link-to}}</li>
      <li>{{#link-to 'countries'}}<i class="people_16"></i><span>Страны</span>{{/link-to}}</li>
      <li>{{#link-to 'cities'}}<i class="songs_16"></i><span>Города</span>{{/link-to}}</li>
      <li>{{#link-to 'places'}}<i class="radio_16"></i><span>Места</span>{{/link-to}}</li>
      <li>.</li>
      <li>{{#link-to 'airports'}}<i class="mixes_16"></i><span>Авиабилеты</span>{{/link-to}}</li>
      <li>{{#link-to 'hotels'}}<i class="video_16"></i><span>Гостиницы</span>{{/link-to}}</li>
      <li>.</li>
      <li>{{#link-to 'tours'}}<i class="radio_16"></i><span>Туры</span>{{/link-to}}</li>
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