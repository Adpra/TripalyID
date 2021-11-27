@extends('adminLTE')

@section('content-admin')
<a href="/admin/tambah" class="btn btn-primary">Tambah Data</a>
<a href="/admin/addPrice" class="btn btn-primary">Tambah Harga</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col" style="width:10rem;">Image</th>
        <th scope="col" style="width:10rem;">Image Checkout</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($triplays as $triplay)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{$triplay->name}}</td>
          <td><img src="/storage/{{$triplay->image}}" alt="" class="img-fluid" ></td>
          <td><img src="/storage/{{$triplay->imageCheckout}}" alt="" class="img-fluid" ></td>
          <td>{{$triplay->description}}</td>
          <td >
            <a href="/admin/{{$triplay->id}}/edit" class="btn btn-success d-inline btn-sm  my-3" >Edit</a>
            <form action="/admin/{{$triplay ->id}}" method="post"  class="d-inline">
                @method('delete')
                @csrf
            <button class="btn btn-danger btn-sm  my-3" type="submit">Delete</button>
        </form>
        <a href="/admin/{{$triplay->id}}/price" class="btn btn-primary my-3 btn-sm">Harga</a>
        </td>
        </tr>
        @endforeach

    </tbody>
  </table>

@endsection


