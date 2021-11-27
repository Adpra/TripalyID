
@extends('adminLTE')

@section('content-admin')
<form action="/admin/tambah/price" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Id_Triplay</label>
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="triplay_id">
              </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga">
              </div>
        </div>
        <div class="col">
            {{--  <div class="mb-3">
                <label for="voucher" class="form-label">Id_Triplay</label>
                <input type="text" class="form-control" id="voucher" placeholder="voucher" name="triplay_id">
              </div>  --}}
            <div class="mb-3">
                <label for="item" class="form-label">item</label>
                <input type="text" class="form-control" id="item" placeholder="item" name="item">
              </div>
        </div>
    </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
