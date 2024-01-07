<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IletisimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('iletisims')->insert([
            'telnumara' => '123456789',
            'adres' => 'Firma Adresi',
            'harita_iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1000.0..."></iframe>',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
