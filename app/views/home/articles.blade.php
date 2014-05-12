@foreach ($articles as $article)
<div class="col-lg-4" style="margin-bottom: 20px;">
  <div>
    <a href="/node/{{$article->id}}"><img alt="" src="{{$article->image}}"></a>
  </div>
  <div style="margin: 5px 0; overflow: hidden"><a href="/node/{{$article->id}}" style="font-size: 14px; text-transform: uppercase; color:#000" title="{{$article->title}}">{{$article->title_limit}}</a></div>
  <div style="color: #636363">{{$article->note}}</div>
</div>
@endforeach