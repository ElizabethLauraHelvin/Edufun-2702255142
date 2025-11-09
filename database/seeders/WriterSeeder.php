<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Writer::create([
            'nama' => 'Raka Putra Wicaksono',
            'spesialis' => 'Software Engineering',
            'imgWriter'=> 'imgWriter1.png'
        ]);

        Writer::create([
            'nama' => 'Bia Mecca Annisa',
            'spesialis' => 'Interactive Multimedia',
            'imgWriter' => 'imgWriter2.avif'
        ]);
    }

}
