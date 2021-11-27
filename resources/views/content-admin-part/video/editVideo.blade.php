
@extends('adminLTE')

@section('content-admin')
<form action="/admin/editVideo/{{$video->id}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Url</label>
        <input type="text" class="form-control" id="url" placeholder="url" name="url" value="{{$video->url}}">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>

@endsection
