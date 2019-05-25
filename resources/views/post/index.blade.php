@extends('includes.adminlte.template', ['content_title' => 'Posts'])

@section('title') Halaman Post @endsection

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Postingan</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Status</th>
                    <th style="min-width: 90px;">Aksi</th>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ str_limit($post->content, 50) }}</td>
                        <td>
                            {!! $post->is_draft == '1' ? '<span class="badge badge-warning">Draft</span>' : '<span class="badge badge-success">Publish</span>' !!}
                        </td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection