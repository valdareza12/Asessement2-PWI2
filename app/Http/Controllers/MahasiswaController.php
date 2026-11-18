<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Fungsi pembantu untuk inisialisasi session data awal
    private function initMahasiswa()
    {
        if (!session()->has('mahasiswa')) {
            session(['mahasiswa' => [
                'Andi Pratama',
                'Rizal Carwani',
                'Farel Muhammad',
                'Aditya Sastrowardoyo'
            ]]);
        }
    }

    // READ: Menampilkan daftar mahasiswa
    public function index()
    {
        $this->initMahasiswa();
        $mahasiswa = session('mahasiswa', []);

        return view('Pages.mahasiswa', compact('mahasiswa'));
    }

    // CREATE: Menambah mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $this->initMahasiswa();
        $mahasiswa = session('mahasiswa', []);
        $mahasiswa[] = $request->nama;

        session(['mahasiswa' => $mahasiswa]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    // UPDATE: Memperbarui nama mahasiswa berdasarkan index
    public function update(Request $request, $index)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $this->initMahasiswa();
        $mahasiswa = session('mahasiswa', []);

        if (isset($mahasiswa[$index])) {
            $mahasiswa[$index] = $request->nama;
            session(['mahasiswa' => $mahasiswa]);
        }

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    // DELETE: Menghapus mahasiswa berdasarkan index
    public function destroy($index)
    {
        $this->initMahasiswa();
        $mahasiswa = session('mahasiswa', []);

        if (isset($mahasiswa[$index])) {
            array_splice($mahasiswa, $index, 1);
            session(['mahasiswa' => $mahasiswa]);
        }

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}