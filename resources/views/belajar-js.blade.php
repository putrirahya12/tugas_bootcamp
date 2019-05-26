@extends('includes.adminlte.template', ['content_title' => 'Belajar Javascript dan Jquery'])

@section('title') Belajar Javascript dan Jquery @endsection

@section('content')
    
    <p>View nya belum kepake dulu!.</p>
    
@endsection

@push('js')
    <script src="{{ url('js/belajar.js') }}"></script>
@endpush