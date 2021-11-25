
@extends('adminLTE')

@section('content-admin')
<form action="/admin/{{$triplay->id}}" method="post" enctype="multipart/form-data">
    @method('patch')
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{$triplay->nama}}"
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" >{{$triplay->deskripsi}}</textarea>
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image" >
      </div>
      <div class="">
        <img src="/storage/{{$triplay->image}}" alt="" class="img-fluid col-md-3" style="width:10rem;">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Image Checkout</label>
        <input type="file" class="form-control" id="imageCheckout" placeholder="Nama" name="imageCheckout" >
      </div>
      <div class="">
        <img src="/storage/{{$triplay->imageCheckout}}" alt="" class="img-fluid col-md-3" style="width:10rem;">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>

@endsection
