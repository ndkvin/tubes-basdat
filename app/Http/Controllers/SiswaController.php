<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function showSiswaKelas($KdKelas) {
      $siswa = DB::select('SELECT S.*, RB.* 
      FROM 
        SISWA S
      JOIN 
        RIWAYAT_BELAJAR RB
      ON
        RB.NisSiswa=S.NIS
      WHERE RB.KdKelas = ?
      ', [$KdKelas]);
      return view('pages.siswa', [
        'siswa'=> $siswa
      ]);
    }
}
