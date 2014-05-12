<script id="tpl-article-item-mini" type="text/x-handlebars-template">
<div class="col-lg-4" style="margin-bottom: 20px;">
  <div>
    <a href="/node/{{id}}"><img alt="" src="{{image}}"></a>
  </div>
  <div style="margin: 10px 0; overflow: hidden"><a href="/node/{{id}}" style="font-size: 14px; text-transform: uppercase; color:#000" title="{{title}}">{{title_limit}}</a></div>
  <div style="color: #636363">{{note}}</div>
</div>
</script>

<script id="tpl-article-item-full" type="text/x-handlebars-template">
<article class="col-lg-8" style="padding: 0 28px; border-right: 1px solid #F0F0F0;">
  <h2 style="margin-top: 0;">{{title}}</h2>
  <p>{{description}}</p>
  <p><img alt="{{title}}" src="{{picture}}" class="main-image"></p>
  <div>{{{content}}}</div>
  <p>Источник: <a href="http://www.euromag.ru" target="_blanck">www.euromag.ru</a></p>
</article>
<div class="col-lg-4">
  <div class="rigth-side">
    <div class="articles-list">
      {{#each articles}}
        <div class="articles-list-item">
          <div>
            <a href="/node/{{attributes.id}}"><img style="width:100%" alt="" src="{{attributes.image}}"></a>
          </div>
          <div style="margin: 5px 0; overflow: hidden">
            <a href="/node/{{attributes.id}}" style="font-size: 11px; font-family: tahoma; color:#000" title="{{attributes.title}}">{{attributes.title_limit}}</a>
          </div>
        </div>
      {{/each}}
    </div>
    <div style="margin: 20px 0">
      <p><a href="/"><span class="glyphicon glyphicon-star"></span> Добавить в избранное</a></p>
      <p>Просмотров: 2141</p>
      <p>В избранном: 148</p>
    </div>
  </div>
</div>
</script>