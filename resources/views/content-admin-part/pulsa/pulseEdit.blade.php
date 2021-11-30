
@extends('adminLTE')

@section('content-admin')
<form action="/admin/pulseEdit/{{$pulse->id}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama" name="name" value="{{$pulse->name}}">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" rows="3" name="description" >{{$pulse->description}}</textarea>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image" >
      </div>
      <div class="">
        <img src="/storage/{{$pulse->image}}" alt="" class="img-fluid col-md-3" style="width:10rem;">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>

@endsection
