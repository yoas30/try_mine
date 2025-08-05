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

    public function edit($id)
    {
        $response = Http::get("http://localhost:8080/alat/$id");

        if ($response->successful()) {
            $data = $response->json();
            return view('posts.edit', ['alat' => $data]);
        } else {
            return back()->with('error', 'Gagal mengambil data');
        }
    }

    public function update(Request $request, $id)
    {
        $response = Http::put("http://localhost:8080/alat/$id", [
            'nama_alat' => $request->nama_alat,
            'deskripsi_kerusakan' => $request->deskripsi_kerusakan,
            'status' => $request->status,
        ]);

        if ($response->successful()) {
            return redirect('/posts')->with('success', 'Data berhasil diperbarui');
        } else {
            return back()->with('error', 'Gagal update data');
        }
    }

    public function destroy($id)
    {
        $response = Http::delete("http://localhost:8080/alat/$id");

        if ($response->successful()) {
            return redirect('/posts')->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Gagal menghapus data');
        }
    }


}
