@extends('backend.layout.master')
@section('title')
edit posts
@endsection
@section('contint')


@if (Session::has('msg'))
<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show">
    {{ Session::get('msg') }}
</div>


@endif


<div class="card">
    <div class="card-body">
      <h3 class="card-title" style="text-align: center;font-size: 28px">اضافة مقال</h3>

      <!-- No Labels Form -->
      <form class="row g-3" action="{{ route("post.update",$post->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="col-md-6">
            <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >العنوان باللغة العربية</label>
          <input type="text" class="form-control" value="{{ $post->getTranslation('title','ar',True) }}" name="nameAr">
        </div>
        <div class="col-md-6">
            <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >العنوان باللغة الانجليزية</label>
            <input type="text" class="form-control" value="{{ $post->getTranslation('title','en',true) }}" name="nameEn">
          </div>
          <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" >المقال باللغة العربية  </label>

          <div class="form-floating">
            <textarea class="form-control" name="desAr" style="height: 100px;">
                {{ $post->getTranslation('bady','ar',True) }}
            </textarea>

          </div>
          <label class="form-label" style="color: rgb(10, 31, 97); font-size: 18px;" > المقال باللغة الانجليزية </label>

          <div class="form-floating">
            <textarea class="form-control" name="desEn" style="height: 100px;">
                {{ $post->getTranslation('bady','en',True) }}
            </textarea>

          </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary" style="color: black;font-size: 22px;" >اضافة</button>
        </div>
      </form><!-- End No Labels Form -->

    </div>
  </div>
@endsection
