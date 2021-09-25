@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Pengaturan Web</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Pengaturan
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
                            <a href="{{ route('pengaturan.create') }}">
                                <button type="button" class="btn btn-primary">Tambah Data</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tabel Pengaturan</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Logo</b></th>
                                            <th><b>Nama Website</b></th>
                                            <th><b>Deskripsi</b></th>
                                            <th><b>Email</b></th>
                                            <th><b>No Telepon</b></th>
                                            <th><b>Alamat</b></th>
                                            <th><b>Link Map</b></th>
                                            <th><b>Link Facebook</b></th>
                                            <th><b>Link Twitter</b></th>
                                            <th><b>Link Instagram</b></th>
                                            <th><b>Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $ambil)
                                            <tr>
                                                <td><img src="{{ asset('logo/' . $ambil->logo) }}" width='75' height='75'>
                                                </td>
                                                <td>{{ $ambil->nama_web }}</td>
                                                <td>{{ $ambil->deskripsi }}</td>
                                                <td>{{ $ambil->email }}</td>
                                                <td>{{ $ambil->no_telp }}</td>
                                                <td>{{ $ambil->alamat }}</td>
                                                <td>{{ $ambil->link_map }}</td>
                                                <td>{{ $ambil->link_facebook }}</td>
                                                <td>{{ $ambil->link_twitter }}</td>
                                                <td>{{ $ambil->link_ig }}</td>
                                                <td>
                                                    <a href="{{ route('pengaturan.edit', ['id' => $ambil->id]) }}">
                                                        <button type="button" class="btn btn-sm btn-info">Edit</button>
                                                    </a>
                                                    <a href="{{ route('pengaturan.destroy', ['id' => $ambil->id]) }}"
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

        </div>
    @endsection
