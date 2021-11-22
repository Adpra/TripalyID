@extends('layouts/app')

@section('title' , 'Triplay')



@section('content')

@include('template-part/header')
@include('template-part/hero')
@include('template-part/intro')
@include('template-part/banner')
@include('template-part/game')
@include('template-part/voucher')
@include('template-part/tutorial')
@include('template-part/footer')

@endsection

