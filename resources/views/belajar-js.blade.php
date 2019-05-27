@extends('includes.adminlte.template', ['content_title' => 'Belajar Javascript dan Jquery'])

@section('title') Belajar Javascript dan Jquery @endsection

@section('content')
    
    <p class="informasi">View nya belum kepake dulu!.</p>

    <a href="#" class="btn btn-success" id="tombol-tambah">
        Tambah Data
    </a>

    <a href="#" class="btn btn-primary" id="tombol-sembunyi">
        Sembunyikan Info
    </a>

    <div><span>coba target saya 1!</span></div>
    <div><span>coba target saya 2!</span></div>
    <div><span>coba target saya 3!</span></div>
    
@endsection

@push('css')
    <style>
        #tombol-tambah {
            /* display: none; */
        }

        .red {
            color: red;
            font-size: 20px;
            font-weight: bold;
        }
        .blue {
            color: blue;
            font-style: italic;
            text-decoration: underline;
        }
    </style>
@endpush

@push('js')
    <script src="{{ url('js/belajar.js') }}"></script>
@endpush