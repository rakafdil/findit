<?php

namespace App\Http\Controllers;

use App\Services\LaporanBarangService;
use Illuminate\Http\Request;

class CariBarangController extends Controller
{
    public function __construct(private LaporanBarangService $service)
    {
    }

    public function show()
    {
        $data = $this->service->getAll();
        return view('cari-barang', compact('data'));
    }

    public function find(Request $request)
    {
        $q = $request->query('q');

        $result = $this->service->findByName($q);

        return response()->json([
            'status' => 'success',
            'query' => $q,
            'data' => $result
        ]);
    }
}
