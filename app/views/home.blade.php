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

  <link rel="stylesheet" type="text/css" href="/sprite.min.css">
  <link rel="stylesheet" type="text/css" href="/fix.css">
  
  <script type="text/javascript" src="/packages/custom-scrollbar/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="/packages/custom-scrollbar/jquery.mCustomScrollbar.js"></script>
  <link rel="stylesheet" type="text/css" href="/packages/custom-scrollbar/jquery.mCustomScrollbar.css">
  
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&subset=cyrillic-ext,latin,cyrillic' rel='stylesheet' type='text/css'>
  
  <script type="text/javascript" src="/app/app.js?foo=<?= rand(1000, 9999) ?>"></script>
  <script type="text/javascript" src="/app/continents.js?foo=<?= rand(1000, 9999) ?>"></script>
  <script type="text/javascript" src="/app/countries.js?foo=<?= rand(1000, 9999) ?>"></script>
  <script type="text/javascript" src="/app/cities.js?foo=<?= rand(1000, 9999) ?>"></script>
  
</head>
<body>
  
  <script type="text/x-handlebars">
  @include('template.index');
  </script>
  
  <script type="text/x-handlebars" id="continents">
  @include('template.continents');
  </script>
  
  <script type="text/x-handlebars" id="countries">
  @include('template.countries');
  </script>
  
  <script type="text/x-handlebars" id="country">
  @include('template.country');
  </script>
  
  <script type="text/x-handlebars" id="cities">
  @include('template.cities');
  </script>
  
  <script type="text/x-handlebars" id="city">
  @include('template.city');
  </script>
  
  <script type="text/x-handlebars" id="airports">
  @include('template.airports');
  </script>
  
  <script type="text/x-handlebars" id="hotels">
  @include('template.hotels');
  </script>
  
  <script type="text/x-handlebars" id="tours">
  @include('template.tours');
  </script>
  
  <script type="text/x-handlebars" id="places">
  @include('template.places');
  </script>
  
  <script type="text/x-handlebars" id="trails">
  @include('template.trails');
  </script>


</body>
</html>