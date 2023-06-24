<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan data jurusan
        $jurusan = Jurusan::all();
        return view('master.jurusan', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menambah data jurusan
        $jurusan = $request->all();
        Jurusan::create($jurusan);
        return redirect('jurusan')->with('success', 'Jurusan Berhasil Ditambahkan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        // Mengedit data jurusan
        $data = $request->all();
        $jurusan->update($data);
        return redirect('jurusan')->with('success', 'Jurusan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        // Menghapus data jurusan
        $jurusan->delete();
        return redirect('jurusan')->with('success', 'Jurusan Berhasil Dihapus');
    }
}
