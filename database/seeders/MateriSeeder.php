<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materi;

class MateriSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel materis.
     */
    public function run(): void
    {
        // Interactive Multimedia
        Materi::create([
            'title' => 'Human and Computer Interaction',
            'imgMateri' => 'im1.jpg',
            'date' => now(),
            'deskripsi' => 'Mempelajari bagaimana manusia berinteraksi dengan komputer dan bagaimana merancang sistem interaktif yang intuitif dan efisien.',
            'Kategori' => 'Interactive Multimedia',
            'writer_id' => 2, // sesuaikan dengan ID writer yang relevan
        ]);

        Materi::create([
            'title' => 'User Experience',
            'imgMateri' => 'im2.jpg',
            'date' => now(),
            'deskripsi' => 'Mengenal konsep dasar UX serta bagaimana merancang pengalaman pengguna yang menyenangkan dan efektif.',
            'Kategori' => 'Interactive Multimedia',
            'writer_id' => 2,
        ]);

        Materi::create([
            'title' => 'User Experience for Digital Immersive Technology',
            'imgMateri' => 'im3.jpeg',
            'date' => now(),
            'deskripsi' => 'Fokus pada pengalaman pengguna dalam teknologi digital immersive seperti VR dan AR.',
            'Kategori' => 'Interactive Multimedia',
            'writer_id' => 2,
        ]);

        // Software Engineering
        Materi::create([
            'title' => 'Pattern Software Design',
            'imgMateri' => 'se1.jpg',
            'date' => now(),
            'deskripsi' => 'Pembahasan mendalam mengenai pola desain perangkat lunak seperti Singleton, Factory, dan Observer.',
            'Kategori' => 'Sofware Engineering',
            'writer_id' => 1,
        ]);

        Materi::create([
            'title' => 'Agile Software Development',
            'imgMateri' => 'se2.jpg',
            'date' => now(),
            'deskripsi' => 'Pendekatan pengembangan perangkat lunak modern yang fleksibel, kolaboratif, dan berorientasi hasil.',
            'Kategori' => 'Sofware Engineering',
            'writer_id' => 1,
        ]);

        Materi::create([
            'title' => 'Code Reengineering',
            'imgMateri' => 'se3.jpg',
            'date' => now(),
            'deskripsi' => 'Proses memperbarui dan meningkatkan kualitas kode tanpa mengubah fungsionalitas sistem secara keseluruhan.',
            'Kategori' => 'Sofware Engineering',
            'writer_id' => 1,
        ]);
    }
}
