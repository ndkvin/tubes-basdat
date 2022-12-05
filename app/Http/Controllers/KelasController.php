<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function showAll() {
      $kelas = DB::select('SELECT 
        K.Grade, K.NamaKelas, RB.KdKelas, COUNT(RB.NisSiswa) Total
      FROM 
        KELAS K
      JOIN 
        RIWAYAT_BELAJAR RB
      ON
        K.KdKelas=RB.KdKelas
      WHERE 
        K.TahunAjaran = ?
      GROUP BY 
        K.Grade, K.NamaKelas, RB.KdKelas
      ORDER BY
        K.Grade, K.NamaKelas
      ', [2022]);
      return view('pages.kelas', [
        'kelas' => $kelas
      ]);
    }
}
