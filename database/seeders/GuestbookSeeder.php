<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('guestbook')->insert([
        //     'name' => 'Irham Aditama',
        //     'from' => 'NewYork',
        //     'agenda' => 'Tamu Khusus',
        // ]);
        \App\Models\Guestbook::factory(72)->create();
    }
}
