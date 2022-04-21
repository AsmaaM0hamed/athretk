<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>


 @include('frontend.layouts.css')


</head>

<body>

 @include('frontend.layouts.header')


 @yield('contint')


@include('frontend.layouts.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @include('frontend.layouts.js')

</body>

</html>
