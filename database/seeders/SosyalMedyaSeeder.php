<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SosyalMedyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sosyalmedya')->insert([
            'facebook' => 'https://www.facebook.com/',
            'instagram' => 'https://www.instagram.com/',
            'behance' => 'https://www.behance.net/',
            'twitter' => 'https://www.twitter.com/',
            'github' => 'https://www.github.com/',
            'pinterest' => 'https://www.pinterest.com/',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
