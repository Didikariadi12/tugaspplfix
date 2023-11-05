<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\ExecutionTime;

class TotalAngkaController extends Controller
{
    //   

public function tampilkanAngka()
{
    $waktuTercepatDetik = DB::table('akar_kuadrat')
        ->select(DB::raw('MIN((waktu)) AS waktu_tercepat_detik'))//TIME_TO_SEC
        ->first();

    $waktuTerlamaDetik = DB::table('akar_kuadrat')
        ->select(DB::raw('MAX((waktu)) AS waktu_terlama_detik'))
        ->first();

    return view('total-angka', compact('waktuTerlamaDetik', 'waktuTercepatDetik'));
}
}