@extends('layouts.template')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Siswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Master</a></div>
                    <div class="breadcrumb-item">Siswa</div>
                </div>
            </div>
        </section>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Siswa</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahData">
                                    Tambah Siswa</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $item)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $item->nis }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->kelas }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->jurusan->nama }}</td>
                                            <td>
                                                <a class="btn btn-icon btn-success" data-toggle="modal"
                                                    data-target="#editData{{ $item->id }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="siswa/{{ $item->id }}" class="btn btn-icon btn-danger"><i
                                                        class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit Data -->
                                        <div class="modal fade no-section" tabindex="-1" id="editData{{ $item->id }}"
                                            non>
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Siswa</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('siswa.update', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label>Nama Siswa</label>
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
                        <h5 class="modal-title">Tambah Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('siswa.store') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label>NIS</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" placeholder="NIS" name="nis">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Kelas" name="kelas">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <div class="input-group">
                                    <select name="jurusan_id" class="form-select" id="">
                                        @foreach ($jurusan as $data)
                                            <option value="{{ $data->id }}" @selected($data->id == $item->jurusan_id)>
                                                {{ $data->nama }}</option>
                                        @endforeach
                                    </select>
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
