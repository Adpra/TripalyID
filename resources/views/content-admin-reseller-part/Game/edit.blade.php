
@extends('adminLTE')

@section('content-admin')
<form action="/admin/gamereseller/{{$GameReseller->id}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama" name="name" value="{{$GameReseller->name}}">
      </div>
      <button type="submit" class="btn btn-primary mt-3">edit</button>
</form>

@endsection
