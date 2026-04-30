<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LaporanBarang;

class LaporanBarangSeeder extends Seeder
{
    public function run(): void
    {
        LaporanBarang::factory()
            ->count(20)
            ->create();
    }
}