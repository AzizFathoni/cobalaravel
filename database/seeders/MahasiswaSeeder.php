<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_Id');

        for($i = 1; $i <= 20; $i++){
            // insert data ke table mahasisswa
            Mahasiswa::create([
                'nama' => $faker->name,
                'nim' =>  $faker->buildingNumber,
                'alamat' => $faker->address
            ]);
        }

    }
}
