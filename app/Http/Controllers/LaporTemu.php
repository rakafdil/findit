<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporTemu extends Controller
{
    public function show()
    {
        return view('lapor-temu');
    }

    public function submit(Request $request)
    {
        dd([
            'input' => $request->except('bukti-pendukung'),
            'file' => $request->file('bukti-pendukung'),
        ]);
    }
}
