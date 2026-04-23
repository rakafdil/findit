<?php
namespace App\Services;

use App\Models\LaporanBarang;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LaporanBarangService
{
    public function getAll()
    {
        return LaporanBarang::query()
            ->where('jenis_laporan', 'Kehilangan')
            ->latest('laporan_id')
            ->get();
    }

    public function find($id)
    {
        return LaporanBarang::query()->find($id);
    }

    public function create(array $validated, $file)
    {
        $imagePath = $file?->store('data/bukti-pendukung', 'public');

        $metadata = [
            'Pelapor: ' . $validated['nama'],
            'NIM: ' . $validated['nim'],
            'Email: ' . $validated['email'],
            'No. Telepon: ' . $validated['no-telepon'],
            'Kategori: ' . $validated['kategori'],
        ];

        if ($imagePath) {
            $metadata[] = 'Bukti Pendukung: ' . $imagePath;
        }

        $deskripsi = trim(($validated['deskripsi'] ?? '') . "\n\n" . implode("\n", $metadata));

        return LaporanBarang::query()->create([
            'user_id' => Auth::id(),
            'jenis_laporan' => 'Kehilangan',
            'nama_barang' => $validated['nama-barang'],
            'deskripsi' => $deskripsi,
            'lokasi' => $validated['lokasi-kehilangan'],
            'tanggal_kejadian' => Carbon::parse($validated['waktu-kehilangan'])->toDateString(),
            'tanggal_penyelesaian' => null,
            'status_laporan' => 'Mencari',
            'img_path' => $imagePath
        ]);
    }

    public function update($id, array $payload)
    {
        $laporan = LaporanBarang::query()->findOrFail($id);
        $laporan->fill($payload);
        $laporan->save();

        return true;
    }

    public function delete($id)
    {
        LaporanBarang::query()->whereKey($id)->delete();

        return true;
    }
}