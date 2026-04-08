<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;

class LaporTemuService
{
    private $path = 'data/kehilangan.json';

    public function getAll()
    {
        if (!Storage::exists($this->path)) {
            return [];
        }

        return json_decode(Storage::get($this->path), true);
    }

    public function find($id)
    {
        return collect($this->getAll())->firstWhere('id', $id);
    }

    public function create(array $validated, $file)
    {
        $data = $this->getAll();

        $imagePath = $file->store('data/bukti-pendukung', 'public');

        $new = [
            'id' => uniqid(),
            'nama' => $validated['nama'],
            'nim' => $validated['nim'],
            'email' => $validated['email'],
            'no_telepon' => $validated['no-telepon'],
            'nama_barang' => $validated['nama-barang'],
            'kategori' => $validated['kategori'],
            'waktu_kehilangan' => $validated['waktu-kehilangan'],
            'lokasi_kehilangan' => $validated['lokasi-kehilangan'],
            'deskripsi' => $validated['deskripsi'] ?? null,
            'bukti_pendukung' => $imagePath,
            'hilang' => true
        ];

        $data[] = $new;

        Storage::put($this->path, json_encode($data, JSON_PRETTY_PRINT));

        return $new;
    }

    public function update($id, array $payload)
    {
        $data = collect($this->getAll())
            ->map(fn($item) => $item['id'] === $id ? array_merge($item, $payload) : $item)
            ->values()
            ->toArray();

        Storage::put($this->path, json_encode($data, JSON_PRETTY_PRINT));

        return true;
    }

    public function delete($id)
    {
        $data = collect($this->getAll())
            ->reject(fn($item) => $item['id'] === $id)
            ->values()
            ->toArray();

        Storage::put($this->path, json_encode($data, JSON_PRETTY_PRINT));

        return true;
    }
}