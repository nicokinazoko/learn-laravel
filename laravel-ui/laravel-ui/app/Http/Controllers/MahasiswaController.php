<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $arrMahasiswa = [
            "Risa Lestari", "Rudi Hermawan", "Bambang Kusumo",
            "Lisa Permata"
        ];

        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function dosen()
    {
        $arrDosen = [
            "Maya Fitrianti, M.M.", "Prof. Silvia Nst, M.Farm.",
            "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom."
        ];

        return view('dosen')->with('dosen', $arrDosen);
    }

    public function gallery()
    {
        return view('galeri');
    }

    public function info($fakultas, $jurusan)
    {
        $data = [$fakultas, $jurusan];
        return view('informasi')->with('data', $data);
    }
}
