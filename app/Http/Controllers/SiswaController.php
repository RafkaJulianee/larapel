<?php

namespace App\Http\Controllers;

use App\Models\Siswa; //
use App\Models\Kelas; //
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Menampilkan daftar resource siswa.
     */
    public function index()
    {
        // Mengambil semua data siswa
        // Kita gunakan 'with' agar data kelas ikut terbawa
        $data = Siswa::with('kelas')->get(); 
        
        return view('siswa.index', compact('data'));
    }

    /**
     * Menampilkan form untuk membuat resource baru.
     */
    public function create()
    {
        // Mengambil data kelas untuk dropdown di form
        $kelas = Kelas::all(); 
        return view('siswa.create', compact('kelas'));
    }

    /**
     * Menyimpan data siswa baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'kelas_id'      => 'required',
            'nis'           => 'required|unique:siswa,nis',
            'nama_siswa'    => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat'        => 'required',
            'email'         => 'required|email|unique:siswa,email',
            'no_telepon'    => 'required',
        ]);

        // Simpan data
        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit data siswa.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all(); // Ambil semua kelas untuk dropdown
        return view('siswa.edit', compact('siswa', 'kelas'));
    }

    /**
     * Memperbarui data siswa di database.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kelas_id'      => 'required',
            'nis'           => 'required|unique:siswa,nis,' . $id,
            'nama_siswa'    => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat'        => 'required',
            'email'         => 'required|email|unique:siswa,email,' . $id,
            'no_telepon'    => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    /**
     * Menghapus data siswa.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
