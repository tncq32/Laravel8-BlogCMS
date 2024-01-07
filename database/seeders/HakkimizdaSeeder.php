<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HakkimizdaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hakkimizda')->insert([
            'hakkimizdaicerik' => 'Firmamız hakkında bilgi içeren metin.',
            'hakkimizdakisayazi' => 'Kısa firma tanıtım yazısı.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
