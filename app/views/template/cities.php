<div class="intro-side full-height">
  <div class="intro-wrapper">
    <h1 class="intro-title">Города</h1>
  </div>
</div>
<div class="covert-side full-height">
{{outlet}}
</div>
<div class="content-side full-height scrollbar">
<ol class="gridline-container">
{{#each}}
  <li class="roll-item">
    <div class="roll-image"><img alt="" src="/data/images/23466347645324.jpg"></div>
    <div class="roll-info"><div class="roll-info-wrapper">
      <div class="roll-info-wrp-top">
        <h2>{{name_ru}}</h2>
        <h3>{{#link-to 'country' this.country_id}}{{country_name_ru}}{{/link-to}}</h3>
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