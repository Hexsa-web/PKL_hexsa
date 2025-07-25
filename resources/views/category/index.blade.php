@extends('layouts.backend')
@section('styles')
@endsection
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css" />
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header bg-secondary">
                Data Ketgory
                <a href="{{ route('backend.category.create') }}" class="btn btn-info btn-sm" style=" float: right;">
                    Tambah
                </a>
            </div>
            <div class="card-body">
                <div class="table table-reponsive">
                    <table class="table" id="dataCategory">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $data)
                            <tr>
                                <td>{{$loop -> iteration}}</td>
                                <td>{{$data -> name}}</td>
                                <td>{{$data -> slug}}</td>
                                <td>
                                    <a href="{{ route('backend.category.edit',$data->id) }}" class="btn btn-sm btn-warning">
                                        Edit</a>
                                    <a href="{{ route('backend.category.destroy',$data->id) }}" class="btn btn-sm btn-danger" data-confirm-delete="true">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#dataCategory')
</script>
@endpush