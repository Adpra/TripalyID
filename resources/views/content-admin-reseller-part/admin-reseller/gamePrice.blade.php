@extends('adminReseller')

@section('content-admin')

<div class="row">
@foreach ($GameReseller->PriceReseller as $Game)
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Rp. {{$Game->price}}</h5>

          <p class="card-text">
          {{$Game->item}} Item
          </p>

          <a href="" class="btn btn-primary" onClick="return confirm('yakin ingin membeli item ini?');">Beli</a>
        </div>
      </div>

    
    
     
    <!-- /.col-md-6 -->
  </div>
  @endforeach
  <!-- /.row -->


@endsection


