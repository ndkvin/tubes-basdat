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
}
