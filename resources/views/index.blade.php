@extends('layouts/app')

@section('title' , 'Triplay')

@section('header')
@include('layouts/header')
@endsection

@section('content')
@include('template-part/hero')
@include('template-part/intro')
@include('template-part/banner')
@if ( $dataGame )
@include('template-part/game')
@endif
@include('template-part/voucher')
@include('template-part/preloader')
@include('template-part/tutorial')
<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection

@section('footer')
@include('layouts/footer')
@endsection
