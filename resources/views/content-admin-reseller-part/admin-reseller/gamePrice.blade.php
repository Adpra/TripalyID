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



          <form action="/notification" method="post">
            @csrf
            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
            <input type="hidden" value="{{ Auth::user()->name }}" name="nameId">
            {{--  <input type="hidden" value="{{ Auth::user()->rofile_picture }}" name="rofile_picture">  --}}
            <input type="hidden" value="{{ $GameReseller->name}}" name="name">
            <input type="hidden" value="{{$Game->price}}" name="price">
            <input type="hidden" value="{{$Game->item}}" name="item">
            <input type="hidden" value="Belum Di Proses" name="status"
            <input type="hidden" value="" name="description">


          <button type="submit" class="btn btn-primary" onClick="return confirm('yakin ingin membeli item ini?');">Beli</button>

        </form>
        </div>
      </div>




    <!-- /.col-md-6 -->
  </div>
  @endforeach
  <!-- /.row -->


@endsection


