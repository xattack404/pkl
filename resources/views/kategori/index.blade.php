@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Kategori</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Kategori
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('kategori.create') }}">
                                <button type="button" class="btn btn-primary">Tambah Data</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tabel Kategori</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Name Kategori</b></th>
                                            <th><b>Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $kategori)
                                            <tr>
                                                <td>{{ $kategori->nama_kategori }}</td>
                                                <td>
                                                    <a href="{{ route('kategori.edit', ['id' => $kategori->id]) }}">
                                                        <button type="button" class="btn btn-sm btn-info">Edit</button>
                                                    </a>
                                                    <a href="{{ route('kategori.destroy', ['id' => $kategori->id]) }}"
                                                        onclick="return confirm('Hapus data?');">
                                                        <button type="button" class="btn btn-sm btn-danger">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3">
                                                    <center>Data kosong</center>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tfoot>
                                </table>
                                <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        {!! $data->appends(request()->except('page'))->render() !!}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
    @endsection
