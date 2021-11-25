@extends('layouts/app')
@section('title' , 'Checkout')


@section('header')
    @include('layouts.second-header')  
@endsection


@section('content')
@include('checkout-part.description')
@include('checkout-part.item-option')
@include('checkout-part.payment-option')
@include('checkout-part.auto-payment-form')
@include('checkout-part.manual-payment-form')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection