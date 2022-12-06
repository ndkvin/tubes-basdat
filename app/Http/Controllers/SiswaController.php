<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function showSiswa() {
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
      ');
      return view('pages.siswa', [
        'siswa'=> $siswa
      ]);
    }

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

    public function siswaLomba() {
      $siswa = DB::select('SELECT * FROM V_PerlombaanDiikutiSiswa ORDER BY Tahun DESC');

      return view('pages.siswa-lomba', [
        'siswa'=> $siswa,
      ]);
    }

    public function siswaOrganisasi() {
      $siswa = DB::select('SELECT 
        * 
      FROM 
        V_OrganisasiDiikutiSiswa 
      ORDER BY 
        Tahun DESC, NamaOrganisasi, NamaSiswa');
      
      return view('pages.siswa-organisasi', [
        'siswa'=> $siswa,
      ]);
    }

    public function siswaKeluar() {
      $siswa = DB::select('SELECT 
        *
      FROM
        V_SiswaKeluar
      ');

      return view('pages.siswa-keluar', [
        'siswa'=> $siswa,
      ]);
    }

    public function jumlahSiswaMbAkademik() {
      $siswa = DB::select('SELECT
        *
      FROM
        V_JumlahSiswaMbAkademik
      ');

      return view('pages.siswa-jumlah', [
        'siswa'=> $siswa,
      ]);
    }
}
