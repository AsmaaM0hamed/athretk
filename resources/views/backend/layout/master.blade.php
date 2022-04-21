<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - @yield('title')</title>

@include('backend.layout.css')
</head>

<body>

  <!-- ======= Header ======= -->
@include('backend.layout.header')

  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('backend.layout.saidbar')
  <!-- End Sidebar-->
  <main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">@yield('title')</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
@yield('contint')
</section>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
@include('backend.layout.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('backend.layout.js')

</body>

</html>
