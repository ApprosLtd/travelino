@extends('home')

@section('content')

  <script type="text/x-handlebars" id="cities">
  @include('template.cities');
  </script>
  
  <script type="text/x-handlebars" id="city">
  @include('template.city');
  </script>
  
@stop