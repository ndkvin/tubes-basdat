<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    public function showAll() {
      $mapel = DB::select('select * from MAPEL');

      return view('pages.mapel', [
        'mapel' => $mapel,
      ]);
    }

    public function destroy($NamaMapel) {
      DB::delete('DELETE FROM MAPEL WHERE NamaMapel = ?', [$NamaMapel]);

      return redirect()
        ->route('mapel');
    }

    public function store(Request $request) {
      DB::insert('INSERT INTO MAPEL (NamaMapel) VALUES (?)',[$request->NamaMapel] );

      return redirect()
        ->route('mapel');
    }
}
