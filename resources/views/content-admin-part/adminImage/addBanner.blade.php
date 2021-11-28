
@extends('adminLTE')

@section('content-admin')
<form action="/admin/addBanner/data" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
