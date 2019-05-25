@extends('includes.template')

@section('title') Halaman Test @endsection

@section('content')
    
    <h1 class="judul">{{ $pesan }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus vero aut eligendi tempora voluptatem culpa reiciendis ipsa modi nostrum? Dicta non amet deleniti, eaque beatae praesentium vero doloribus quibusdam soluta!</p>
    
@endsection

@push('css')
    <style>
        .judul {
            color: red;
        }
    </style>
@endpush

@push('js')
    <script>
        alert('Welcome!');
    </script>
@endpush