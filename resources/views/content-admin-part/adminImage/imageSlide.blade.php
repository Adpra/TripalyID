@extends('adminLTE')

@section('content-admin')
<a href="/admin/addslide" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col" style="width:10rem;">Image</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($imageSlide as $img)
        <tr>
          <th scope="row"></th>
          <td><img src="/storage/{{$img->image}}" alt="" class="img-fluid" ></td>
          <td>
            <a href="/admin/{{$img->id}}/slideEdit" class="btn btn-success d-inline btn-sm  my-3" >Edit</a>
            <form action="/admin/imageSlide/{{$img->id}}" method="post"  class="d-inline">
                @method('delete')
                @csrf
            <button class="btn btn-danger btn-sm  my-3" type="submit">Delete</button>
        </form>

        </td>
        </tr>
        @endforeach

    </tbody>
  </table>

@endsection


