<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TampilDataController extends Controller
{
     public function tampilkanData()
    {
        $response = Http::get('http://localhost:8080/alat');

        // Cek apakah request sukses
        if ($response->successful()) {
            $data = $response->json(); // Ubah ke array

            return view('posts.index', ['posts' => $data]);
        } else {
            return response()->json(['error' => 'Gagal ambil data dari API'], 500);
        }
    }
}
