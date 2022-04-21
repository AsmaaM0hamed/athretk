@extends('backend.layout.master')
@section('title')
admin
@endsection

@section('contint')


@if (Session::has('msg'))
<div class="alert alert-daner bg-danger text-light border-0 alert-dismissible fade show" style="text-align: center">
    {{ Session::get('msg') }}
</div>


@endif

<div class="card">
    <div class="card-body">
        <div class="row">
            <h2 class="card-title col-6"  style="text-align: center;font-size: 28px;margin: 20px 0px">المالك</h2>
            <a href="{{ route("register") }}" class="btn btn-success col-6" style="color: black;margin: 30px 0px" > اضافة ادمن</a>

        </div>

      <!-- Primary Color Bordered Table -->
      <table class="table table-bordered " style="text-align: center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الاسم</th>
            <th scope="col">البريد الالكتروني</th>
            <th scope="col">حذف</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                    <form action="{{ route("Admindestroy",$admin->id)}}" method="POST">
                    @csrf
                    @method("Get")
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
