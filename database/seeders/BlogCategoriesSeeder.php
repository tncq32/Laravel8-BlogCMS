<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Rastgele 10 kategori ekleyin
        for ($i = 1; $i <= 10; $i++) {
            DB::table('blog_categories')->insert([
                'parent_id' => null,
                'merchant_id' => 1,
                'title' => 'Kategori ' . $i,

                'front_image' => 'images/blog/4/.jpg', // Yol güncellendi
                'description' => 'Kategori ' . $i . ' açıklaması',
                'rank' => $i,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
