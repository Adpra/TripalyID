@extends('adminReseller')

@section('content-admin')

<div class="row">
@foreach ($gameResellers as $Game)
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$Game->name}}</h5>

          <p class="card-text">
            <!-- Some quick example text to build on the card title and make up the bulk of the card's
            content. -->
          </p>

          <a href="/reseller/{{$Game->id}}/price" class="btn btn-primary">Beli</a>
        </div>
      </div>

    
    
     
    <!-- /.col-md-6 -->
  </div>
  @endforeach
  <!-- /.row -->


@endsection


