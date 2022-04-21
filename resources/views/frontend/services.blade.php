@extends('frontend.layouts.master')
@section('title')
services
@endsection
@section('contint')
<section id="services" class="services" style="padding-top: 100px">
    <div class="container">

      <div class="section-title" >
        <h2>{{ trans('frontend/home.services') }}</h2>
        <p>{{ trans('frontend/home.Athrtec Contracting Group works in accordance with the standards of the sustainability certificate, and the certificate is issued to the client by the Ministry of Housing.') }}</p>
      </div>





      <div class="row">
        @foreach ($services as $service)
        <div class="col-4" data-aos="zoom-in" style=" width: 380;height: 340;">
          <div class="icon-box iconbox-blue">


            <img style="width: 90%;height:200px;" src=" {{ URL::asset("services") }}/{{ $service->imgName }}">

            <h4>{{ $service->name}}</h4>
            <p>{{ $service->descrption }}</p>
          </div>
        </div>
        @endforeach


      </div>

    </div>
  </section>
@endsection
