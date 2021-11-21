@extends('layout.global')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h1>HALAMAN UTAMA</h1>
@endsection