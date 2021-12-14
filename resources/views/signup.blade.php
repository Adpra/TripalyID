@extends('layout/app')

@section('header')
@include('layout/second-header')
@endsection

@section('content')
<section class="form-signup-partner">
    <div class="container">
        <div class="form-wrapper">
            <p>Pastikan anda mengisi form dengan benar
                untuk menjadi partner triplay.id !</p>
            <form action="" method="POST">
                {{ csrf_field() }} 
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="text" name="waNumber" id="waNumber" placeholder="Nomor Whatssapp">
                <button name="login-partner" id="login-partner">Daftar</button>
            </form>
            <p>Mendaftar sebagai partner resmi Triplay ID</a></p>
        </div>
    </div>
</section>
<script type="text/javascript" src="{{ asset('js/toogler-nav.js') }}"></script>
@endsection

@section('footer')
@include('layout/footer')
@endsection