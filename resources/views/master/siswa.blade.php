@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah
                    Siswa</a>
                <div class="card">
                    <div class="card-header">Data Siswa</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Jurusan</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
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
                                        <td><img src="{{ asset('storage/'. $item->foto) }}" width="200px" alt="" srcset=""></td>
                                        <td>
                                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editdata{{ $item->id }}">Edit</a>
                                            <a href="siswa/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editdata{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Siswa</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('siswa.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group mb-3">
                                                            <label for="">NIS</label>
                                                            <input type="text" class="form-control" value="{{ $item->nis }}" name="nis">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Nama</label>
                                                            <input type="text" class="form-control" value="{{ $item->nama }}" name="nama">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Kelas</label>
                                                            <input type="number" class="form-control" value="{{ $item->kelas }}" name="kelas">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Alamat</label>
                                                            <input type="text" class="form-control" value="{{ $item->alamat }}" name="alamat">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Jurusan</label>
                                                            <select name="jurusan_id" class="form-select" id="">
                                                                @foreach ($jurusan as $data)
                                                                    <option value="{{ $data->id }}" @selected($data->id == $item->jurusan_id)>{{ $data->nama }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Foto</label>
                                                            <input type="file" class="form-control" name="foto">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Foto Sebelumnya :</label>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <img src="{{ asset('storage/'. $item->foto) }}" width="300px" alt="" srcset="">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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

    <!-- Modal -->
    <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">NIS</label>
                            <input type="text" class="form-control" name="nis">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama </label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Kelas </label>
                            <input type="number" class="form-control" name="kelas">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Jurusan</label>
                            <select name="jurusan_id" class="form-select" id="">
                                @foreach ($jurusan as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection