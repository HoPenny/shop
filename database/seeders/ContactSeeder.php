<?php

namespace Database\Seeders;

use App\Models\Contact;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();

        $faker = Faker::create('zh_TW');

        for ($i = 1; $i <= 20; $i++) {
            Contact::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'mobile' => $faker->phoneNumber,
                'subject' => $faker->realText(15),
                'message' => $faker->realText(50),
                'service' => $faker->realText(15),
                'source' => $faker->realText(15),
                'status' => $faker->randomElement(['published', 'draft', 'pending']),
            ]);
        }
    }
}