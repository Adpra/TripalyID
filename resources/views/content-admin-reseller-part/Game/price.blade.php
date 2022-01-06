
@extends('adminLTE')

@section('content-admin')


<form action="/admin/gamereseller/{$GameReseller->PriceReseller->id}/price" method="post">
    @csrf
    <h1>Tambah Harga</h1>
    <div class="row mb-5">
        <div class="col-5">
            <div>
                <input type="hidden" class="form-control" id="" placeholder="Harga" name="game_reseller_id" value="{{$GameReseller->id}}">
              </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="price">
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
        @foreach ($GameReseller->PriceReseller as $ty)
        <form action="/admin/gamereseller/{{$ty->id}}/price" method="post" >
            @method('patch')
            @csrf
        <div class="col-5">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga {{$loop->iteration}}</label>
                <input type="text" class="form-control" id="{{$ty->id}}" placeholder="Harga" name="price" value="{{$ty->price}}">
              </div>
        </div>
        <div class="col-5">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Voucher {{$loop->iteration}}</label>
                <input type="text" class="form-control" id="{{$ty->id}}" placeholder="Voucher" name="item" value="{{$ty->item}}">
              </div>
        </div>
        <div class="col-2">
            <div class="mt-3">
            <button type="submit" class="btn btn-success mt-3">Edit</button>
              </div>
        </div>
    </form>
        <div class="col-2">
            <div class="mt-3">
                <form action="/admin/gamereseller/{{$ty->id}}/price" method="post"  class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm  my-3" type="submit">Delete</button>
            </form>
            </div>
        </div>
        @endforeach
    </div>




@endsection
