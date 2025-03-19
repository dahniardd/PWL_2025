@extends('layouts.app')

{{-- Customize layout sections --}}

@section('title', 'Welcome') {{-- Menghindari subtitle yang duplikat --}}
@section('content_header')
    <h1>Welcome</h1>
@endsection

{{-- Content body: main page content --}}
@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@endsection

{{-- Push extra CSS --}}
@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}
@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush
