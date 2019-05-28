@extends('includes.adminlte.template', ['content_title' => 'Categories'])

@section('title') Halaman Kategori Postingan @endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Kategori Postingan</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            {{-- add button --}}
            <a href="{{ url('posts/create') }}" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-form">
                <i class="fa fa-plus"></i> Tambah
            </a>

            {{-- tabel data --}}
            <table class="table table-striped table-bordered mt-2">
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th style="min-width: 90px;">Aksi</th>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ url('categories/' . $category->id . '/edit') }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <form action="{{ url('categories/' . $category->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    {{-- modal form --}}
    @include('category._modal')

@endsection

@push('js')
<script>
    $(function() {
        $("#form-add").on('submit', function(e) {
            e.preventDefault();

            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(res) {
                    alert(res.message);
                },
                error: function(err) {
                    alert('gagal!');
                }
            });
        }); 
    });
</script>
@endpush