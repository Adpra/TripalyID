
@extends('adminLTE')

@section('content-admin')

    <div class="row">
        <div class="col">
            @foreach ($triplay->price as $ty)

            {{--  <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Id_Triplay</label>
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="triplay_id" value="{{$ty->triplay_id}}">
              </div>  --}}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                <input type="text" class="form-control" id="{{$ty->id}}" placeholder="Harga" name="{{$ty->harga}}" value="{{$ty->harga}}">
                <form action="/admin/{{$ty->id}}/price" method="post"  class="d-inline">
                    @method('delete')
                    @csrf
                <button class="btn btn-danger btn-sm  my-3" type="submit">Delete</button>
            </form>
              </div>
            @endforeach
        </div>
        <div class="col">
            @foreach ($triplay->voucher as $ty)
            {{--  <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Id_Triplay</label>
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="triplay_id" value="">
              </div>  --}}
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Voucher</label>
                <input type="text" class="form-control" id="{{$ty->id}}" placeholder="Voucher" name="{{$ty->voucher}}" value="{{$ty->voucher}}">
                <form action="/admin/{{$ty->id}}/voucher" method="post"  class="d-inline">
                    @method('delete')
                    @csrf
                <button class="btn btn-danger btn-sm  my-3" type="submit">Delete</button>
            </form>
              </div>
              @endforeach
        </div>
    </div>

      <button type="submit" class="btn btn-primary mt-3">Tambah</button>


@endsection
