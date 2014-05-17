<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
  <title>{{$title}}</title>
  <link rel="stylesheet" type="text/css" href="/packages/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/fix2.css">
</head>
<body>
  <div class="container">
    <div class="row" style="margin: 20px 0;">
      <div class="col-lg-2">
        @include('home.common.menu')
      </div>
      <div class="col-lg-10 row" id="dynamic-content">
          <div style="text-align: center;">
              {{$paginator}}
          </div>
          {{$content}}
          <div style="text-align: center;">
              {{$paginator}}
          </div>
      </div>
    </div>
  </div>
</body>
</html>
