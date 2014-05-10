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
<article class="col-lg-8" style="padding-right: 43px">
  <h2>{{title}}</h2>
  <p>{{description}}</p>
  <p><img alt="{{title}}" src="{{picture}}" class="main-image"></p>
  <div>{{{content}}}</div>
  <p>Источник: <a href="http://www.euromag.ru" target="_blanck">www.euromag.ru</a></p>
</article>
<article class="col-lg-2">
  {{#each articles}}
    <div style="margin-bottom: 20px;">
      <div>
        <a href="/node/{{attributes.id}}"><img style="width:100%" alt="" src="{{attributes.image}}"></a>
      </div>
      <div style="margin: 5px 0; overflow: hidden"><a href="/node/{{attributes.id}}" style="font-size: 11px; font-family: tahoma; color:#000" title="{{attributes.title}}">{{attributes.title_limit}}</a></div>
    </div>
  {{/each}}
</article>
</script>