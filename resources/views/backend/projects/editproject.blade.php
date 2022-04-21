@extends('backend.layout.master')
@section('title')
editServices
@endsection
@section('contint')

<div class="card">
    <div class="card-body">
      <h3 class="card-title" style="text-align: center;font-size: 28px">تعديل خدمة</h3>

      <!-- No Labels Form -->
      <form class="row g-3" action="{{ route("projects.update",$projects->id) }}" method="POST" enctype="multipart/form-data">
       @method("put")
        @csrf
        <div class="col-md-6">
            <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >الاسم باللغة العربية</label>
          <input type="text" value="{{ $projects->getTranslation('name','ar',true)}}" class="form-control" placeholder="enter Name" name="nameAr">
        </div>
        <div class="col-md-6">
            <label class="form-label"  style="color: rgb(10, 31, 97); font-size: 18px;" >الاسم باللغة الانجليزية</label>
            <input type="text"value="{{ $projects->getTranslation('name','en',true)}}" class="form-control" placeholder="enter Name" name="nameEn">
          </div>
<input type="hidden" value="{{ $projects->imgName }}" name="img">

        <div class="col-12">
            <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >  الصورة</label>
          <input type="file" class="form-control" name="imgName">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary" style="color: black;font-size: 22px;" >تعديل</button>
        </div>
      </form><!-- End No Labels Form -->

    </div>
  </div>
@endsection
