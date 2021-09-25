@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Slider</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Slider
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
                            <a href="{{ route('slider.create') }}">
                                <button type="button" class="btn btn-primary">Tambah Data</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tabel Slider</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Judul Slider</b></th>
                                            <th><b>Caption</b></th>
                                            <th><b>Gambar</b></th>
                                            <th><b>Aktif</b></th>
                                            <th><b>Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $slider)
                                            <tr>
                                                <td>{{ $slider->judul }}</td>
                                                <td>{{ $slider->caption }}</td>
                                                <td><img src="{{ asset('gambar_slider/' . $slider->gambar) }}" width='75'
                                                        height='75'></td>
                                                <td>{{ $slider->aktif }}</td>
                                                <td>
                                                    {{-- <a href="{{ route('slider.aktif', ['id' => $slider->id]) }}"
                                                        onclick="return confirm('Set Aktif?');">
                                                        <button type="submit" class="btn btn-success text-white">Set
                                                            Aktif</button>
                                                    </a>
                                                    <a href="{{ route('slider.nonaktif', ['id' => $slider->id]) }}"
                                                        onclick="return confirm('Set NonAktif?');">
                                                        <button type="submit" class="btn btn-primary">Set
                                                            NonAktif</button>
                                                    </a> --}}
                                                    <a href="{{ route('slider.edit', ['id' => $slider->id]) }}">
                                                        <button type="button" class="btn btn-info">Edit</button>
                                                    </a>
                                                    <a href="{{ route('slider.destroy', ['id' => $slider->id]) }}"
                                                        onclick="return confirm('Hapus data?');">
                                                        <button type="button" class="btn btn-danger">Hapus</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            Save
                                            </button>
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
