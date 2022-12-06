<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
  public function showAll() {
    $guru = DB::select('SELECT * FROM GURU');

    return view('pages.guru', [
      'guru' => $guru,
    ]);
  }

  public function destroy($KdGuru) {
    DB::delete('DELETE FROM GURU WHERE KdGuru = ?', [$KdGuru]);
    return redirect()
      ->route('guru');
  }

  public function lihatJamMengajar() {
    $guru = DB::select('SELECT * FROM V_TotalJamMengajar');

    return view('pages.guru-jam', [
      'guru'=> $guru
    ]);
  }
}
