@extends('adminLTE')

@section('content-admin')
@foreach ($notification as $triplay)
<div class="row">
    <div class="col-lg">
        @if($triplay->status == 'Sudah Di Proses' || $triplay->status == 'Gagal')


            @else
            <div class="card" style="padding:30px;">
                <div class="row">

            <div class="col">Id: {{$triplay->user_id}}</div>
            <div class="col">{{$triplay->nameId}}</div>
            <div class="col">{{$triplay->name}}</div>
            <div class="col">{{$triplay->price}}</div>
            <div class="col">{{$triplay->item}}</div>
            <div class="col">tanggal</div>
            <div class="col">{{$triplay->status}}</div>
            <form action="/admin/permission/{{$triplay->id}}" method="post" style="display:flex;">
                @csrf
                @method('patch')

            <div class="col">
            <input rows="4" cols="50" name="description">
            </input>
            </div>
            <input type="hidden" value="{{$triplay->nameId}}" name="nameId">
            {{--  <input type="hidden" value="{{ Auth::user()->rofile_picture }}" name="rofile_picture">  --}}
            <input type="hidden" value="{{$triplay->name}}" name="name">
            <input type="hidden" value="{{$triplay->price}}" name="price">
            <input type="hidden" value="{{$triplay->item}}" name="item">

            <input type="hidden" value="" name="status" id="status">


            <div class="col">
                <button class="btn btn-primary" type="submit"  onClick="document.getElementById('status').value='Sudah Di Proses'"> Prosess</button>
            </div>
            <div class="col">
                <button class="btn btn-danger" type="submit" onClick="document.getElementById('status').value='Gagal'"> Gagal </button>
            </div>
        </form>


        </div>

      </div>




      @endif
    <!-- /.col-md-6 -->
  </div>

</div>
  <!-- /.row -->
  @endforeach

@endsection


