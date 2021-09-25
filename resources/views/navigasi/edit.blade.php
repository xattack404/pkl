@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Edit Navigasi</h4>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{ route('navigasi.update', $data['navigasi']->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Form Input Data</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nama Navigasi
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="nama_navigasi"
                                            placeholder="Masukan Nama Menu Navigasi"
                                            value="{{ $data['navigasi']->nama_navigasi }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Judul Konten
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="judul_konten"
                                            placeholder="Masukan Judul Konten"
                                            value="{{ $data['navigasi']->judul_konten }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1"
                                        class="col-sm-3 text-end control-label col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select required name="kategori" class="form-control" data-live-search="true">
                                            @foreach ($data['kategori'] as $kategori)
                                                <option value="{{ $kategori->id }}"
                                                    {{ $data['navigasi']->kategori == $kategori->id ? 'selected' : '' }}>
                                                    {{ $kategori->nama_kategori }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Isi Konten
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"
                                            name="isi_konten">{{ $data['navigasi']->isi_konten }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Gambar Awal
                                    </label>
                                    <div class="col-sm-9">
                                        <img src="{{ asset('gambar_artikel/' . $data['navigasi']->gambar) }}" width='150'
                                            height='150'>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Upload Gambar</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="gambar" id="gambar" class="custom-file-input" />
                                            <label class="custom-file-label" for="validatedCustomFile">Choose
                                                file...</label>
                                            <div class="invalid-feedback">
                                                Example invalid custom file feedback
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Status
                                        Aktif</label>
                                    <div class="col-sm-9">
                                        <select required name="aktif" class="form-control" data-live-search="true">
                                            <option value="1">Aktif</option>
                                            <option value="0">Nonaktif</option>
                                        </select>
                                    </div>
                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" class="btn btn-primary">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            @endsection
