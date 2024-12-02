<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 fake barang records using the factory
        Barang::factory(10)->create(); // Ini akan membuat 10 entri barang

    }
}
