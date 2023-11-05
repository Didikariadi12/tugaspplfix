<?php

namespace App\Http\Controllers;

use App\Models\Akar;
use Illuminate\Http\Request;
use App\Models\User;

class BandingkanWaktuController extends Controller
{
    //
    public function index()
{
    $hasil_akar =User::orderby('id')->paginate();
    return view('total-login-userapi', ['hasil_akar'=> $hasil_akar]);
}
// public function increment(Request $request)
//     {
//         $user = auth()->user();
//         $user->increment('click_count');
//         return redirect()->route('total-login');
//     }   
}
//     // Simulasi operasi API
//     $startTimeAPI = microtime(true);
//     // Lakukan operasi API di sini (gantilah dengan logika sesuai kebutuhan Anda)
//     usleep(1000000); // Contoh: Tunggu selama 1 detik
    
    
// $endTimeAPI = microtime(true);
//     $executionTimeAPI = ($endTimeAPI - $startTimeAPI) * 1000; // Konversi ke milidetik

//     // Simulasi operasi PL-SQL
    
   
// $startTimePLSQL = microtime(true);
    
   
// // Lakukan operasi PL-SQL di sini (gantilah dengan logika sesuai kebutuhan Anda)
//     usleep(500000); // Contoh: Tunggu selama 0.5 detik
    

// $endTimePLSQL = microtime(true);
    
   
// $executionTimePLSQL = ($endTimePLSQL - $startTimePLSQL) * 1000; // Konversi ke milidetik

//     // Hitung waktu terlama dan tercepat
//     $waktuTerlamaAPI = min($executionTimeAPI, $executionTimePLSQL);
//     $waktuTercepatAPI = max($executionTimeAPI, $executionTimePLSQL);
//     $waktuTerlamaPLSQL = $waktuTerlamaAPI;
    
// $waktuTercepatPLSQL = $waktuTercepatAPI;

//     // Mengambil data hasil PL-SQL
//     $hasilPLSQL = Akar::where('jenis', 'PL-SQL')->latest()->first();

//     // Mengambil data hasil API
//     $hasilAPI = Akar::where('jenis', 'API')->latest()->first();

//     return view('bandingkan-waktu', [
//         'inputPLSQL' => $hasilPLSQL->input,
//         'angkaPLSQL' => $hasilPLSQL->angka,
//         'waktuEksekusiPLSQL' => $hasilPLSQL->waktu,
//         'inputAPI' => $hasilAPI->input, // Menambahkan angka inputan API
//         'angkaAPI' => $hasilAPI->angka,
//         'waktuEksekusiAPI' => $hasilAPI->waktu,
//         'rataRataAPI' => Akar::where('jenis', 'API')->avg('waktu'),
//         'rataRataPLSQL' => Akar::where('jenis', 'PL-SQL')->avg('waktu'),
//         'waktuTerlamaAPI' => $waktuTerlamaAPI,
//         'waktuTercepatAPI' => $waktuTercepatAPI,
//         'waktuTerlamaPLSQL' => $waktuTerlamaPLSQL,
//         'waktuTercepatPLSQL' => $waktuTercepatPLSQL,
        
//     ]);
// }

