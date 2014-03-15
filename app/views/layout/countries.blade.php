@extends('home')

@section('content')

  <script type="text/x-handlebars" id="countries">
  @include('template.countries');
  </script>
  
  <script type="text/x-handlebars" id="country">
  @include('template.country');
  </script>
  
@stop