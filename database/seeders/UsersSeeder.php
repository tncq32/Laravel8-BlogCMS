<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Faker\Generator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = User::create([
            'first_name'        => 'Tuncay',
            'last_name'         => 'Şeker',
            'email'             => 'tuncayseker32@gmail.com',
            'password'          => Hash::make('seker'),
            'email_verified_at' => now(),

        ]);
        $demoUser -> assignRole('admin');


        $this->addDummyInfo($faker, $demoUser);

        User::factory(100)->create()->each(function (User $user) use ($faker) {
            $this->addDummyInfo($faker, $user);
        });
    }

    private function addDummyInfo(Generator $faker, User $user)
    {
        $dummyInfo = [
            'company'  => 'tuncay',
            'phone'    => '05522449518',
            'website'  => 'tuncayseker32@gmail.com',
            'language' => $faker->languageCode,
            'country'  => $faker->countryCode,
        ];

        $info = new UserInfo();
        foreach ($dummyInfo as $key => $value) {
            $info->$key = $value;
        }
        $info->user()->associate($user);
        $info->save();
    }
}
