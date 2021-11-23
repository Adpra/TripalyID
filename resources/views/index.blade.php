@extends('layouts/app')

@section('title' , 'Triplay')

@section('header')
@include('layouts/header')
@endsection

@section('content')
@include('template-part/hero')
@include('template-part/intro')
@include('template-part/banner')
@include('template-part/game')
@include('template-part/voucher')
@include('template-part/tutorial')
@endsection

@section('footer')
@include('layouts/footer')
@endsection
