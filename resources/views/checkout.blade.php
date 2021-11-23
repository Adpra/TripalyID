@extends('layouts/app')
@section('title' , 'Checkout')


@section('header')
    @include('layouts.second-header')  
@endsection


@section('content')
@include('checkout-part.description')
@endsection