<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RawController extends Controller
{
  public function raw(Request $request) {
    DB::statement($request->NamaMapel);

    return redirect('/');
  }
}
