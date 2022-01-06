@extends('adminReseller')

@section('content-admin')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col" >Game</th>
        <th scope="col" >price</th>
        <th scope="col">item</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $triplay)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$triplay->user_id}}</td>
          <td>{{$triplay->nameId}}</td>
          <td>{{$triplay->name}}</td>
          <td>Rp. {{$triplay->price}}</td>
          <td>{{$triplay->item}}</td>
          <td>{{$triplay->description}}</td>
          <td>{{$triplay->created_at}}</td>
          <td>{{$triplay->status}}</td>

        </tr>
        @endforeach

    </tbody>
  </table>

@endsection


