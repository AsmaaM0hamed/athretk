@extends('backend.layout.master')
@section('title')
AddServices
@endsection
@section('contint')


@if (Session::has('msg'))
<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show">
    {{ Session::get('msg') }}
</div>


@endif


<div class="card">
    <div class="card-body">
      <h3 class="card-title" style="text-align: center;font-size: 28px">اضافة خدمة</h3>

      <!-- No Labels Form -->
      <form class="row g-3" action="{{ route("AdminServices.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >الاسم باللغة العربية</label>
          <input type="text" class="form-control" placeholder="enter Name" name="nameAr">
        </div>
        <div class="col-md-6">
            <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >الاسم باللغة الانجليزية</label>
            <input type="text" class="form-control" placeholder="enter Name" name="nameEn">
          </div>
          <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >الوصف باللغة العربية  </label>

          <div class="form-floating">
            <textarea class="form-control" name="desAr" style="height: 100px;"></textarea>

          </div>
          <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" > الوصف باللغة الانجليزية </label>

          <div class="form-floating">
            <textarea class="form-control" name="desEn" style="height: 100px;"></textarea>

          </div>

        <div class="col-12">
            <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >  الصورة</label>
          <input type="file" class="form-control" name="img">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary" style="color: black;font-size: 22px;" >اضافة</button>
        </div>
      </form><!-- End No Labels Form -->

    </div>
  </div>
@endsection
