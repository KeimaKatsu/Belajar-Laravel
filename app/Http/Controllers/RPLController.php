<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class RPLController extends Controller
{
    public function berita()
    {
        // Logic untuk mengambil data berita RPL dari model (jika ada)
        return view('berita');
    }
    public function input_berita()
    {
        // Logic untuk mengambil data berita RPL dari model (jika ada)
        return view('admin.input_berita');
    }
    public function submit_berita(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'gambar' => 'required'
        ]);


        berita::create([
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'), // Update the field name
            'foto' => $request->input('foto')
        ]);


        return redirect()->route('admin.input_berita')->with('success', 'Berita telah berhasil disimpan.');
    }

    public function input_lulusan()
    {
        // Logic untuk mengambil data berita RPL dari model (jika ada)
        return view('admin.input_lulusan');
    }

    public function profile_lulusan()
    {
        // Logic untuk mengambil data profil lulusan RPL dari model (jika ada)
        return view('profile_lulusan');
    }

    public function aktifitas_mahasiswa()
    {
        // Logic untuk mengambil data aktivitas mahasiswa RPL dari model (jika ada)
        return view('aktifitas_mahasiswa');
    }

    public function biodata()
    {
        // Logic untuk mengambil data berita RPL dari model (jika ada)
        return view('biodata');
    }
}
