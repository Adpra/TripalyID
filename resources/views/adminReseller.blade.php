@extends('admin-reseller-part/header')

@section('title' , 'Admin Reseller')

@section('content')
@include('admin-reseller-part/navbar')
@include('admin-reseller-part/sidebar')
@include('admin-reseller-part/content')
@include('admin-reseller-part/sidebarControll')

@endsection

@section('footer')
@include('admin-reseller-part/footer')
@endsection
