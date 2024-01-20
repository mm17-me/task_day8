<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" >
<head>
  @include('includes.head')
</head>

<body>
  
  <div class="hero_area">

      @include('includes.header')

      @yield('content')

      @include('includes.info')

      @include('includes.footer')

      @include('includes.footerJs')
      
</body>

</html>