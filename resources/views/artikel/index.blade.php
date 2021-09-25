@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Artikel</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Artikel
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
                            <a href="{{ route('artikel.create') }}">
                                <button type="button" class="btn btn-primary">Tambah Data</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tabel Artikel</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Judul Artikel</b></th>
                                            <th><b>Isi Artikel</b></th>
                                            <th><b>Gambar</b></th>
                                            <th><b>Kategori</b></th>
                                            <th><b>Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $artikel)
                                            <tr>
                                                <td>{{ $artikel->judul_artikel }}</td>
                                                <td>{{ $artikel->isi_artikel }}</td>
                                                <td><img src="{{ asset('gambar_artikel/' . $artikel->gambar) }}" width='75'
                                                        height='75'></td>
                                                <td>{{ $artikel->relasiKategori->nama_kategori }}</td>
                                                <td>
                                                    <a href="{{ route('artikel.edit', ['id' => $artikel->id]) }}">
                                                        <button type="button" class="btn btn-sm btn-info">Edit</button>
                                                    </a>
                                                    <a href="{{ route('artikel.destroy', ['id' => $artikel->id]) }}"
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
