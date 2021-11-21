@extends('layouts/app')

@section('title' , 'Triplay')

@include('template-part/header')

@section('content')

@include('template-part/hero')
@include('template-part/intro')
@include('template-part/banner')
@include('template-part/game')

@endsection