<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Rastgele 100 yorum ekleyin
        for ($i = 1; $i <= 100; $i++) {
            DB::table('comments')->insert([
                'blog_id' => rand(1, 25), // 1 ile 25 arasında rastgele bir blog seçin
                'user_id' => rand(1, 10), // 1 ile 10 arasında rastgele bir kullanıcı seçin
                'content' => $faker->paragraph, // Rastgele bir paragraf ekleyin
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
