@extends('layout/app')

@section('header')
@include('layout/second-header')
@endsection

@section('content')
<section class="form-collaboration">
    <div class="container">
        <div class="form-wrapper">
            <p>Pastikan anda mengisi form dengan benar
                untuk pemasaran dan kerjasama dengan triplay.id !</p>
            <form action="" method="POST">
                {{ csrf_field() }} 
                <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap">
                <input type="text" name="email" id="email" placeholder="Email">
                <input type="text" name="waNumber" id="waNumber" placeholder="Nomor WA">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Pesan"></textarea>
                <button name="login-partner" id="login-partner">Kirim</button>
            </form>
            <p>Daftar pemasaran dan kerjasama dengan triplay indonesia</a></p>
        </div>
    </div>
</section>
<script type="text/javascript" src="{{ asset('js/toogler-nav.js') }}"></script>
@endsection

@section('footer')
@include('layout/footer')
@endsection