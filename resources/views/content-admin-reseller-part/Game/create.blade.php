
@extends('adminLTE')

@section('content-admin')
<form action="/admin/gamereseller/data" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
