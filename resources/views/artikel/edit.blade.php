@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Tambah Artikel</h4>
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
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{ route('artikel.update', $data['artikel']->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Form Input Data</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Judul Artikel
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname"
                                            value="{{ $data['artikel']->judul_artikel }}" name="judul_artikel"
                                            placeholder="Masukan Judul Konten" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1"
                                        class="col-sm-3 text-end control-label col-form-label">Kategori</label>
                                    <div class="col-sm-9">
                                        <select required name="kategori" class="form-control" data-live-search="true">
                                            @foreach ($data['kategori'] as $kategori)
                                                <option value="{{ $kategori->id }}"
                                                    {{ $data['artikel']->kategori_id == $kategori->id ? 'selected' : '' }}>
                                                    {{ $kategori->nama_kategori }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Isi Artikel
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control"
                                            name="isi_artikel">{{ $data['artikel']->isi_artikel }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Gambar Awal
                                    </label>
                                    <div class="col-sm-9">
                                        <img src="{{ asset('gambar_artikel/' . $data['artikel']->gambar) }}" width='150'
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
