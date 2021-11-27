
@extends('adminLTE')

@section('content-admin')
<form action="/admin/slideEdit/{{$imageSlide->id}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image" >
      </div>
      <div class="">
        <img src="/storage/{{$imageSlide->image}}" alt="" class="img-fluid col-md-3" style="width:10rem;">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>

@endsection
