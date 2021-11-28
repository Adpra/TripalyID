
@extends('adminLTE')

@section('content-admin')
<form action="/admin/addVideo/data" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Url</label>
        <input type="text" class="form-control" id="url" placeholder="url" name="url">
      </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
