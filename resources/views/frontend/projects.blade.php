
@extends('frontend.layouts.master')

@section('title')
    projects
@endsection
@section('contint')

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

          <div class="section-title">
            <h2>{{ trans('frontend/header.Portfolio') }}</h2>

            <p>{{ trans('frontend/home.Athrtec Contracting Group works in accordance with the standards of the sustainability certificate, and the certificate is issued to the client by the Ministry of Housing.') }}</p>
           </div>



          <div class="row portfolio-container">
        @foreach ($projects as $project)

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <img style="height:270px;width: 380px;" src="{{ URL::asset("projectsImg") }}/{{ $project->imgName }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $project->name }}</h4>

                <a href="../frontend/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>

        @endforeach



          </div>

        </div>
      </section><!-- End Portfolio Section -->
@endsection
