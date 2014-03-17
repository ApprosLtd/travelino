@extends('home')

@section('content')

  <script type="text/x-handlebars" id="airports">
  @include('template.airports')
  </script>
  
  <script type="text/x-handlebars" id="cities">
  @include('template.cities')
  </script>
  
  <script type="text/x-handlebars" id="city">
  @include('template.city')
  </script>
  
  <script type="text/x-handlebars" id="continents">
  @include('template.continents')
  </script>
  
  <script type="text/x-handlebars" id="countries">
  @include('template.countries')
  </script>
  
  <script type="text/x-handlebars" id="country">
  @include('template.country')
  </script>
  
  <script type="text/x-handlebars" id="hotels">
  @include('template.hotels')
  </script>
  
  <script type="text/x-handlebars" id="places">
  @include('template.places')
  </script>
  
  <script type="text/x-handlebars" id="tours">
  @include('template.tours')
  </script>
  
  <script type="text/x-handlebars" id="trails">
  @include('template.trails')
  </script>
  
@stop