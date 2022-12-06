<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
  public function showSiswa()
  {
    $siswa = DB::select('SELECT 
        S.* , O.Nama NamaOrtu
      FROM
        SISWA S
      JOIN ORTU O
      ON
        S.NikOrtu=O.Nik
      ');
    return view('pages.siswa', [
      'siswa' => $siswa
    ]);
  }

  public function showSiswaKelas($KdKelas)
  {
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
      'siswa' => $siswa
    ]);
  }

  public function siswaLomba()
  {
    $siswa = DB::select('SELECT * FROM V_PerlombaanDiikutiSiswa ORDER BY Tahun DESC');

    return view('pages.siswa-lomba', [
      'siswa' => $siswa,
    ]);
  }

  public function siswaOrganisasi()
  {
    $siswa = DB::select('SELECT 
        * 
      FROM 
        V_OrganisasiDiikutiSiswa 
      ORDER BY 
        Tahun DESC, NamaOrganisasi, NamaSiswa');

    return view('pages.siswa-organisasi', [
      'siswa' => $siswa,
    ]);
  }

  public function siswaKeluar()
  {
    $siswa = DB::select('SELECT 
        *
      FROM
        V_SiswaKeluar
      ');

    return view('pages.siswa-keluar', [
      'siswa' => $siswa,
    ]);
  }

  public function showLulus()
  {
    $siswa = DB::select('SELECT 
      *
    FROM
      V_SiswaLulus
    ');

    return view('pages.siswa-lulus', [
      'siswa' => $siswa,
    ]);
  }

  public function jumlahSiswaMbAkademik()
  {
    $siswa = DB::select('SELECT
        *
      FROM
        V_JumlahSiswaMbAkademik
      ');

    return view('pages.siswa-jumlah', [
      'siswa' => $siswa,
    ]);
  }

  public function jumlahSiswaMbNonAkademik()
  {
    $siswa = DB::select('SELECT
        *
      FROM
        V_JumlahSiswaMbNonAkademik
      ');
    return view('pages.siswa-jumlah-n', [
      'siswa' => $siswa,
    ]);
  }

  public function siswaMbAkademik()
  {
    $siswa = DB::select('SELECT
        *
      FROM
        V_MbAkademik
      ');
    return view('pages.siswa-mbakademik', [
      'siswa' => $siswa,
    ]);
  }

  public function siswaMbNonAkademik()
  {
    $siswa = DB::select('SELECT
        *
      FROM
        V_MbNonAkademik
      ');
    return view('pages.siswa-mbnonakademik', [
      'siswa' => $siswa,
    ]);
  }

  public function siswaMbAkademikMipa()
  {
    $siswa = DB::select('SELECT * FROM V_MbMipa');
    return view('pages.siswa-mb-mipa', [
      'siswa' => $siswa,
    ]);
  }

  public function showRiwayat($Nis)
  {
    $siswa = DB::select('SELECT * FROM V_RiwayatBelajar WHERE Nis=?', [$Nis]);
    return view('pages.siswa-riwayat', [
      'siswa' => $siswa,
    ]);
  }
}
