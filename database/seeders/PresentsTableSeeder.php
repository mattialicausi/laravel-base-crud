<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Present;


class PresentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for($i = 0; $i < 12; $i++) {
            $newPresent = new Present();
            $newPresent->name = $faker->firstName();
            $newPresent->surname = $faker->lastName();
            $newPresent->present = $faker->word(1);
            $newPresent->address = $faker->address();
            if($faker->boolean()){
                $newPresent->good_or_evil = 'buono';
            }else{
                $newPresent->good_or_evil = 'cattivo';
            }
            $newPresent->id_elf = $faker->bothify();
            $newPresent->save();
        }
    }
}
