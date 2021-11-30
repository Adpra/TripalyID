@extends('adminLTE')

@section('content-admin')
<a href="/admin/addPulse" class="btn btn-primary">Tambah Data</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col" style="width:10rem;">Image</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pulses as $pulse)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$pulse->name}}</td>
          <td><img src="/storage/{{$pulse->image}}" alt="" class="img-fluid" ></td>
          <td>{{$pulse->description}}</td>
          <td >
            <a href="/admin/{{$pulse->id}}/pulseEdit" class="btn btn-success d-inline btn-sm  my-3" >Edit</a>
            <form action="/admin/pulse/{{$pulse->id}}" method="post"  class="d-inline">
                @method('delete')
                @csrf
            <button class="btn btn-danger btn-sm  my-3" type="submit">Delete</button>
        </form>
        <a href="/admin/{{$pulse->id}}/pricePulse" class="btn btn-primary my-3 btn-sm">Harga</a>
        </td>
        </tr>
        @endforeach

    </tbody>
  </table>

@endsection


