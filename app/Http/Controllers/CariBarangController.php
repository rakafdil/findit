<?php

namespace App\Http\Controllers;

use App\Services\LaporTemuService;
use Illuminate\Http\Request;

class CariBarangController extends Controller
{
    public function __construct(private LaporTemuService $service) {}

    public function show()
    {
        $data = $this->service->getAll();
        return view('cari-barang', compact('data'));
    }

    public function find($id)
    {
        $this->service->find($id);
    }
}
