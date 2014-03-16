<div class="full-height">
<section class="flymenu">
  <header>
    <h1><span>Навигация</span></h1>
  </header>
  <nav>
    <ul>
      <li><a<?= Request::is('continents') ? ' class="active"' : '' ?> href="/continents"><i class="trending_16"></i><span>Континенты</span></a></li>
      <li><a<?= Request::is('countries')  ? ' class="active"' : '' ?> href="/countries"><i class="people_16"></i><span>Страны</span></a></li>
      <li><a<?= Request::is('cities')     ? ' class="active"' : '' ?> href="/cities"><i class="songs_16"></i><span>Города</span></a></li>
      <li><a<?= Request::is('places')     ? ' class="active"' : '' ?> href="/places"><i class="radio_16"></i><span>Места</span></a></li>
      <li>.</li>
      <li><a<?= Request::is('airports')   ? ' class="active"' : '' ?> href="/airports"><i class="mixes_16"></i><span>Авиабилеты</span></a></li>
      <li><a<?= Request::is('hotels')     ? ' class="active"' : '' ?> href="/hotels"><i class="video_16"></i><span>Гостиницы</span></a></li>
      <li>.</li>
      <li><a<?= Request::is('tours')      ? ' class="active"' : '' ?> href="/tours"><i class="radio_16"></i><span>Туры</span></a></li>
      <li><a<?= Request::is('trails')     ? ' class="active"' : '' ?> href="/trails"><i class="radio_16"></i><span>Маршруты</span></a></li>
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