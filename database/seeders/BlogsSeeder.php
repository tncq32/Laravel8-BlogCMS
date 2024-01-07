<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kategorilere bağlı olarak rastgele 25 blog ekleyin
        for ($i = 1; $i <= 25; $i++) {
            DB::table('blogs')->insert([
                'merchant_id' => 1,
                'category_id' => rand(1, 10), // 1 ile 10 arasında rastgele bir kategori seçin
                'blog_small_title' => 'Küçük Başlık ' . $i,
                'blog_title' => 'Blog ' . $i,
                'blog_description' => 'Blog ' . $i . ' açıklaması',
                'yazar_id' => 'yazar' . $i,
                'blog_small_description' => 'Küçük açıklama ' . $i,
                'blog_front_image' => 'images/blog/4/.jpg',
                'blog_sidebar' => 'center',
                'blog_rank' => $i,
                'blog_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        for ($i = 1; $i <= 10; $i++) {
            DB::table('blogs')->insert([
                'merchant_id' => 1,
                'category_id' => rand(1, 10), // 1 ile 10 arasında rastgele bir kategori seçin
                'blog_small_title' => 'Küçük Başlık ' . $i,
                'blog_title' => 'Blog ' . $i,
                'blog_description' => 'Blog ' . $i . ' açıklaması',
                'yazar_id' => 'yazar' . $i,
                'blog_small_description' => 'Küçük açıklama ' . $i,
                'blog_front_image' => 'images/blog/4/.jpg' ,
                'blog_sidebar' => 'left',
                'blog_rank' => $i,
                'blog_status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
