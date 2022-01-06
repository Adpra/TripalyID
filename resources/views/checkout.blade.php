@extends('layout/app')
@section('title' , 'Checkout')


@section('header')
    @include('layout.second-header')  
@endsection


@section('content')
@include('checkout-part.description')
@include('checkout-part.item-option')
@include('checkout-part.payment-option')
@include('checkout-part.auto-payment-form')
@include('checkout-part.manual-payment-form')
<script type="text/javascript" src="{{ asset('js/checkout.js') }}"></script>
@endsection

@section('footer')
    @include('layout.footer')
@endsection