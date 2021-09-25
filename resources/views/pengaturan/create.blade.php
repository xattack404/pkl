@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Tambah Pengaturan Web</h4>
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
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{ route('pengaturan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Form Input Data</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nama Web
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="nama_web"
                                            placeholder="Masukan Nama Web" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Email
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="fname" name="email"
                                            placeholder="Masukan Email" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">No Telepon
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="fname" name="no_telp"
                                            placeholder="Masukan No Telepon" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Alamat
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="alamat"
                                            placeholder="Masukan Alamat" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Link Map
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="link_map"
                                            placeholder="Masukan Link Map" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Link Facebook
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="link_facebook"
                                            placeholder="Masukan Link Facebook" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Link Twitter
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="link_twitter"
                                            placeholder="Masukan Link Twitter" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-end control-label col-form-label">Link Instagram
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" name="link_instagram"
                                            placeholder="Masukan Link Instagram" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Deskripsi Web
                                    </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3">Upload logo</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="logo" id="logo" class="custom-file-input" required />
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
