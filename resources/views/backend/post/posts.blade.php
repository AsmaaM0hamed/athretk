@extends('backend.layout.master')
@section('title')
posts
@endsection

@section('contint')


@if (Session::has('msg'))
<div class="alert alert-daner bg-danger text-light border-0 alert-dismissible fade show" style="text-align: center">
    {{ Session::get('msg') }}
</div>


@endif
@if (Session::has('msge'))
<div class="alert alert-warning bg-warning text-light border-0 alert-dismissible fade show" style="text-align: center">
    {{ Session::get('msge') }}
</div>


@endif
<div class="card">
    <div class="card-body">
        <div class="row">
            <h2 class="card-title col-6"  style="text-align: center;font-size: 28px;margin: 20px 0px">المقالات</h2>
            <a href="{{ route("post.create") }}" class="btn btn-success col-6" style="color: black;margin: 30px 0px" > اضافة مقال</a>

        </div>

      <!-- Primary Color Bordered Table -->
      <table class="table table-bordered " style="text-align: center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">العنوان</th>
            <th scope="col">المقال</th>
            <th scope="col">تعديل</th>
            <th scope="col">حذف</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->bady }}</td>
                <td><a href="{{ route("post.edit",$post->id) }}" class="btn btn-warning ">تعديل</a></td>
                <td>
                    <form action="{{ route("post.destroy",$post->id)}}" method="POST">
                    @csrf
                    @method("delete")
                    <button  class="btn btn-danger" style="color: black">حذف</button>
                    </form>

                </td>


            </tr>
            @endforeach


        </tbody>
      </table>
      <!-- End Primary Color Bordered Table -->

    </div>
  </div>

@endsection
