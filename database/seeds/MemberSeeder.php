<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 5;

        for($i = 0; $i < $limit; $i++){
            DB::table('members')->insert([
                'name' => $faker->name,
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber
            ]);
        }
    }
}
