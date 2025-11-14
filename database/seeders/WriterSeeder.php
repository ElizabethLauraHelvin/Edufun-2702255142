<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Writer as WriterModel;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');
        // for ($i = 0; $i <= 3; $i++){
        //     WriterModel::create([
        //         'Name' => $faker->name(),
        //         'Email' => $faker->email,
        //         'Spesialis' => $faker->randomElement(['Software Engineering', 'Interactive Multimedia', 'Data Mining']),
        //         'ProfilePicture' => $faker->image(public_path('img'), 300, 300, 'people', false)
        //     ]);
        // }

        WriterModel::insert([
            ['Name' => 'Agung Pranomo',
            'Email' => 'agung.pranomo@binus.edu',
            'Spesialis' => 'Software Engineering',
            'ProfilePicture' => 'co1.png'],

            ['Name' => 'Ibu Titiek',
            'Email' => 'ibu.titiek@binus.edu',
            'Spesialis' => 'Interactive Multimedia',
            'ProfilePicture' => 'ce2.png'],

            ['Name' => 'Joko Widodo',
            'Email' => 'joko.widodo@binus.edu',
            'Spesialis' => 'Data Mining',
            'ProfilePicture' => 'ce3.png'],
        ]);




    }
}
