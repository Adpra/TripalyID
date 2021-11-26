@extends('adminLTE-part/header')

@section('title' , 'Admin')

@section('content')
@include('adminLTE-part/navbar')
@include('adminLTE-part/sidebar')
@include('adminLTE-part/content')
@include('adminLTE-part/sidebarControll')

@endsection

@section('footer')
@include('adminLTE-part/footer')
@endsection
