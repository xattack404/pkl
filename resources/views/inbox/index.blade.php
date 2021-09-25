@extends('layouts.admin_main')
@section('admincontent')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Inbox</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Inbox
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
                            <a href="#">

                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tabel Inbox</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Name Kategori</b></th>
                                            <th><b>Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($data as $inbox)
                                            <tr>
                                                <td>{{ $inbox->nama }}</td>
                                                <td>{{ $inbox->email }}</td>
                                                <td>{{ $inbox->subjek }}</td>
                                                <td>{{ $inbox->isi }}</td>
                                                <td>
                                                    <a href="{{ route('inbox.destroy', ['id' => $inbox->id]) }}"
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
