<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function showAll() {
      $kelas = DB::select('SELECT 
        K.Grade, K.NamaKelas, RB.KdKelas, K.TahunAjaran, COUNT(RB.NisSiswa) Total
      FROM 
        KELAS K
      JOIN 
        RIWAYAT_BELAJAR RB
      ON
        K.KdKelas=RB.KdKelas
      GROUP BY 
        K.Grade, K.NamaKelas, RB.KdKelas, K.TahunAjaran
      ORDER BY
        K.TahunAjaran DESC, K.Grade, K.NamaKelas
      ');
      return view('pages.kelas', [
        'kelas' => $kelas
      ]);
    }
}
