
@extends('adminLTE')

@section('content-admin')
<form action="/admin/tambah/data" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" placeholder="Nama" name="name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image Checkout</label>
        <input type="file" class="form-control" id="imageCheckout" placeholder="Nama" name="imageCheckout">
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
