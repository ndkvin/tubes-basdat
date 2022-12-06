<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function showSiswaKelas($KdKelas) {
      $siswa = DB::select('SELECT S.*, RB.*, O.Nama NamaOrtu 
      FROM 
        SISWA S
      JOIN 
        RIWAYAT_BELAJAR RB
      ON
        RB.NisSiswa=S.NIS
      JOIN
        ORTU O
      ON 
        O.Nik=S.NikOrtu
      WHERE RB.KdKelas = ?
      ', [$KdKelas]);
      return view('pages.siswa', [
        'siswa'=> $siswa
      ]);
    }
}
