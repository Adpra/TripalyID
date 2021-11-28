
@extends('adminLTE')

@section('content-admin')


<form action="/admin/{$pulse->pricePulse->id}/pricePulse" method="post">
    @csrf
    <h1>Tambah Harga</h1>
    <div class="row mb-5">
        <div class="col-5">
            <div>
                <input type="hidden" class="form-control" id="{{$pulse->id}}" placeholder="Harga" name="pulse_id" value="{{$pulse->id}}">
              </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="price" placeholder="price" name="price">
              </div>
        </div>
        <div class="col-5">
            <div class="mb-3">
                <input type="text" class="form-control" id="item" placeholder="Jumlah Item" name="item">
              </div>
        </div>
        <div class="col-2">
            <div class="mb-3 ">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>

</form>




<h1 class="mt-5">Data Harga</h1>

    <div class="row ">


        @foreach ($pulse->pricePulse as $ty)
        <form action="/admin/{{$ty->id}}/pricePulse" method="post" enctype="multipart/form-data" >
                @method('patch')

            @csrf
        <div class="col-8">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga {{$loop->iteration}}</label>
                <input type="text" class="form-control" id="{{$ty->id}}" placeholder="Harga" name="price" value="{{$ty->price}}">

              </div>

        </div>
        <div class="col-8">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Voucher {{$loop->iteration}}</label>
                <input type="text" class="form-control" id="{{$ty->id}}" placeholder="Voucher" name="item" value="{{$ty->item}}">
              </div>
        </div>
        <div class="col-2">
            <div class="mt-3">

            <button type="submit" name="submit" class="btn btn-success mt-3" value="Update">Edit</button>


              </div>
        </div>
</form>


            <div class="col-2">
                <div class="mt-3">
                    <form action="/admin/{{$ty->id}}/pricePulse" method="post"  class="d-inline" id="delete" >
                        @method('delete')
                        @csrf
                    <button class="btn btn-danger btn-sm  my-3" type="submit" name="submit" value="Delete" >Delete</button>

                    </form>
                </div>
            </div>

        @endforeach

    </div>





@endsection
