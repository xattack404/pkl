@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Navigasi</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Navigasi
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('navigasi.create') }}">
                                <button type="button" class="btn btn-primary">Tambah Data</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tabel Navigasi</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Name Navigasi</b></th>
                                            <th><b>Link</b></th>
                                            <th><b>Judul Konten</b></th>
                                            <th><b>Isi Konten</b></th>
                                            <th><b>Gambar</b></th>
                                            <th><b>Kategori</b></th>
                                            <th><b>Aktif</b></th>
                                            <th><b>Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $nav)
                                            <tr>
                                                <td>{{ $nav->nama_navigasi }}</td>
                                                <td>{{ $nav->link }}</td>
                                                <td>{{ $nav->judul_konten }}</td>
                                                <td>{{ $nav->isi_konten }}</td>
                                                <td><img src="{{ asset('gambar_artikel/' . $nav->gambar) }}" width='75'
                                                        height='75'></td>
                                                <td>{{ $nav->relasiKategori->nama_kategori }}</td>
                                                <td>{{ $nav->aktif }}</td>
                                                <td>
                                                    <a href="{{ route('navigasi.edit', ['id' => $nav->id]) }}">
                                                        <button type="button" class="btn btn-sm btn-info">Edit</button>
                                                    </a>
                                                    <a href="{{ route('navigasi.destroy', ['id' => $nav->id]) }}"
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
