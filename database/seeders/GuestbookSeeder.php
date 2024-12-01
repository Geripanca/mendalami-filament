<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guestbook;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan factory untuk membuat 10 data guestbook
        Guestbook::factory(10)->create();
    }
}
