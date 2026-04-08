<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LaporTemuService;

class LaporTemuController extends Controller
{
    public function __construct(private LaporTemuService $service) {}

    public function show()
    {
        return view('lapor-temu');
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'nim' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255'],
            'no-telepon' => ['required', 'string', 'max:30'],
            'nama-barang' => ['required', 'string', 'max:120'],
            'kategori' => ['required', 'string', 'max:80'],
            'waktu-kehilangan' => ['required', 'date'],
            'lokasi-kehilangan' => ['required', 'string', 'max:150'],
            'deskripsi' => ['nullable', 'string', 'max:1000'],
            'bukti-pendukung' => ['required', 'file', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
        ]);

         $this->service->create(
            $validated,
            $request->file('bukti-pendukung')
        );

        return redirect()->route('lapor-temu.show')->with('success', 'Laporan berhasil disimpan.');
    }
}
