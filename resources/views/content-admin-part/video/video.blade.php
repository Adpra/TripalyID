@extends('adminLTE')

@section('content-admin')
<a href="/admin/addvideo" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">URL</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($videos as $video)
        <tr>
          <th scope="row"></th>
          <td>{{$video->url}}</td>
          <td>
            <a href="/admin/{{$video->id}}/editVideo" class="btn btn-success d-inline btn-sm  my-3" >Edit</a>
            <form action="/admin/video/{{$video->id}}" method="post"  class="d-inline">
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


