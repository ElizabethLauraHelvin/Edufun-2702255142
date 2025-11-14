<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Materi as MateriModel;

class MateriSeeder extends Seeder{
    public function run(): void{

        $faker = Faker::create('id_ID');

        MateriModel::insert([
            // --- Interactive Multimedia ---
            [
                'Title' => 'Human and Computer Interaction',
                'BodyText' => $faker->paragraphs(10, true),
                'ArticleImage' => 'im1.jpg',
                'Cat' => 'Interactive Multimedia',
                'writer_id' => 1
            ],
            [
                'Title' => 'User Experience',
                'BodyText' => $faker->paragraphs(10, true),
                'ArticleImage' => 'im2.jpeg',
                'Cat' => 'Interactive Multimedia',
                'writer_id' => 1
            ],
            [
                'Title' => 'User Experience for Digital Immersive Technology',
                'BodyText' => $faker->paragraphs(10, true),
                'ArticleImage' => 'im3.jpeg',
                'Cat' => 'Interactive Multimedia',
                'writer_id' => 1
            ],

            // --- Software Engineering ---
            [
                'Title' => 'Pattern Software Design',
                'BodyText' => $faker->paragraphs(10, true),
                'ArticleImage' => 'se1.jpg',
                'Cat' => 'Software Engineering',
                'writer_id' => 2
            ],
            [
                'Title' => 'Agile Software Development',
                'BodyText' => $faker->paragraphs(10, true),
                'ArticleImage' => 'se2.jpg',
                'Cat' => 'Software Engineering',
                'writer_id' => 2
            ],
            [
                'Title' => 'Code Reengineering',
                'BodyText' => $faker->paragraphs(10, true),
                'ArticleImage' => 'se3.jpeg',
                'Cat' => 'Software Engineering',
                'writer_id' => 3
            ],
        ]);
    }
}
