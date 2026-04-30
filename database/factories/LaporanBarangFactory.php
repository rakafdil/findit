<?php

namespace Database\Factories;

use App\Models\LaporanBarang;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanBarangFactory extends Factory
{
    protected $model = LaporanBarang::class;

    public function definition(): array
    {
        $images = [
            'data/bukti-pendukung/7WN6ToB0cn3M83CLvzxLNoOpK6fdr2Y3rJQUW1mz.png',
            'data/bukti-pendukung/91LIMZG0IqobgwUZGOkcqurqaLhg9ctZKlddrTPG.png',
            'data/bukti-pendukung/DnuQ7PHiwJGTptN4FS4zL85ZIH6EbDlgWUvwjpGd.png',
            'data/bukti-pendukung/dTRsv2upDn75BXTWJdOFTUQyX7yqZyBqooQs3fSx.png',
            'data/bukti-pendukung/eMknvmrX15USMxw3I5vXzj35sl6E3xuAdJ87edkL.png',
            'data/bukti-pendukung/KR3Wj6D9PTwEsiipx9ASL0FS1w3IiiK3njsyBEgZ.png',
            'data/bukti-pendukung/LohSWIRvSudFGqWS2N4SFr3f2VtIKPd6BCAlIyXB.png',
            'data/bukti-pendukung/OCKbo7SjsHoCDt3IVI5VXEZhLIvHiPvfxm1Jzhxt.png',
            'data/bukti-pendukung/odtbbC4pHrv8llJACjeZS9IcL8LgXUKTAf54eovP.png',
            'data/bukti-pendukung/RUlEB770gmvuhUrC8hx1ZeqHGvtIrimzuirUGxPk.png',
            'data/bukti-pendukung/ugcswu4mDyOcurK8GbXYjbj6atIhtiJDRLnlVoD4.png',
            'data/bukti-pendukung/YWEqiGmyIJ1H9rYJpcafWjUHv12I8b290vHEOMAP.png',
        ];

        return [
            'user_id' => User::inRandomOrder()->first()->user_id ?? 1,
            'jenis_laporan' => $this->faker->randomElement(['Kehilangan', 'Temuan']),
            'nama_barang' => $this->faker->word(),
            'deskripsi' => $this->faker->sentence(),
            'lokasi' => $this->faker->city(),
            'tanggal_kejadian' => $this->faker->date(),
            'tanggal_penyelesaian' => null,
            'status_laporan' => $this->faker->randomElement(['Mencari', 'Tersimpan', 'Dikembalikan', 'Rejected']),
            'img_path' => $this->faker->randomElement($images),
        ];
    }
}