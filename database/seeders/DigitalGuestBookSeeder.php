<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DigitalGuestBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Submission 4

        // DB::table('digitalguestbook')->insert([
        //     'name' => 'Irham',
        //     'from' => 'Bandung',
        //     'email' => 'irhamaditama514@gmail.com',
        //     'phone number' => '089659075899'
        // ]);
        \App\Models\DigitalGuestBook::factory(82)->create();
    }
}
