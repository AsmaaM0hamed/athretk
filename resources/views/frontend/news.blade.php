@extends('frontend.layouts.master')
@section('title')
    news
@endsection

@section('contint')

       <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

          <div class="section-title">
            <h2>{{ trans('frontend/home.news') }}</h2>
          </div>

          <div class="row">
              @foreach ($news as $new)


            <div class="col-6" style="margin: 50px 0px">
              <div class="box">
                <h3>{{ $new->title }}</h3>
             <p>
                 {{ $new->bady }}

             </p>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">{{ trans('frontend/home.news2') }}</a>
                </div>
              </div>
            </div>

            @endforeach


        </div>
    </section><!-- End Pricing Section -->

@endsection
