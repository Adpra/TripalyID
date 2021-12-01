@extends('layouts/app')

@section('header')
@include('layouts/second-header')
@endsection

@section('content')
<section class="form-login-partner">
    <div class="container">
        <div class="form-wrapper">
            <h3>Triplay <span>ID</span></h3>
            <p>Partner Resmi</p>
            <form action="" method="POST">
                {{ csrf_field() }} 
                <input type="password" name="username" id="username" placeholder="Username">
                <input type="text" name="password" id="oassword" placeholder="Password">
                <button name="login-partner" id="login-partner">Login</button>
            </form>
            <p>Belum jadi partner? <a href="#">Klik Disini !</a></p>
        </div>
    </div>
</section>
<script type="text/javascript" src="{{ asset('js/toogler-nav.js') }}"></script>
@endsection

@section('footer')
@include('layouts/footer')
@endsection