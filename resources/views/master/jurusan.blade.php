@extends('layouts.template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Jurusan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ url('jurusan') }}">Master</a></div>
                    <div class="breadcrumb-item">Jurusan</div>
                </div>
            </div>
        </section>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Jurusan</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahData">
                                    Tambah Jurusan</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Jurusan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jurusan as $item)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $item->nama }}</td>
                                            <td>
                                                <a class="btn btn-icon btn-success" data-toggle="modal"
                                                    data-target="#editData{{ $item->id }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="jurusan/{{ $item->id }}" class="btn btn-icon btn-danger"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit Data -->
                                        <div class="modal fade no-section" tabindex="-1" id="editData{{ $item->id }}"
                                            non>
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Jurusan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('jurusan.update', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group mb-2">
                                                                <label>Nama Jurusan</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $item->nama }}" name="nama">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer bg-whitesmoke br">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Keluar</button>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Tambah Data -->
        <div class="modal fade" tabindex="-1" id="tambahData">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Jurusan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('jurusan.store') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group mb-2">
                                <label>Nama Jurusan</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Nama Jurusan" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
