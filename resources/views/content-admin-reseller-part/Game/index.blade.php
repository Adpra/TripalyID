@extends('adminLTE')

@section('content-admin')
<a href="/admin/gamereseller/add" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($gameResellers as $Game)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$Game->name}}</td>
          <td >
            <a href="/admin/gamereseller/{{$Game->id}}/edit" class="btn btn-success d-inline btn-sm  my-3" >Edit</a>
            <form action="/admin/gamereseller/{{$Game->id}}" method="post"  class="d-inline">
                @method('delete')
                @csrf
            <button class="btn btn-danger btn-sm  my-3" type="submit">Delete</button>
        </form>
        <a href="/admin/gamereseller/{{$Game->id}}/price" class="btn btn-primary my-3 btn-sm">Harga</a>
        </td>
        </tr>
        @endforeach

    </tbody>
  </table>

@endsection


