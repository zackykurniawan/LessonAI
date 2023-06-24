<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan data siswa
        $siswa = Siswa::all();
        $kategori = Jurusan::all();
        return view('master.siswa', compact('siswa', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menambah data siswa
        $data = $request->all();
        $files = $request->file('foto')->store('siswa/foto');
        $data['foto'] = $files;
        Siswa::create($data);
        return redirect('siswa')->with('success', 'Siswa Berhasil Ditambahkan');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        // Mengedit data siswa
        $data = $request->all();
        if ($request->hasFile('foto')) {
            $files = $request->file('foto')->store('siswa/foto');
            Storage::delete($siswa->foto);
            $data['foto'] = $files;
            $siswa->update($data);
        } else {
            $data['foto'] = $siswa->foto;
            $siswa->update($data);
        }
        return redirect('siswa')->with('success', 'Siswa Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        // Menghapus data siswa
        Storage::delete($siswa->foto);
        $siswa->delete();
        return redirect('siswa')->with('success', 'Siswa Berhasil Dihapus');
    }
}
