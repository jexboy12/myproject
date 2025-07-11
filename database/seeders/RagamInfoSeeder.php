<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\RagamInfo;

class RagamInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // Pastikan ada setidaknya satu user di database
        // Jika belum ada, buat satu user admin
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@masjid.com'],
            [
                'name' => 'Admin Masjid',
                'password' => bcrypt('password'), // Ganti 'password' dengan password yang aman
            ]
        );

        // Buat beberapa data contoh untuk RagamInfo
        RagamInfo::create([
            'title' => 'Kegiatan Penyembelihan Hewan Qurban Idul Adha 1445 H',
            'content' => '<p>Alhamdulillah, pada Hari Raya Idul Adha 1445 H, Masjid Jami\' Al-Ikhlash telah berhasil melaksanakan kegiatan penyembelihan hewan qurban. Acara ini terselenggara berkat partisipasi aktif dari seluruh jamaah dan warga sekitar. Semoga qurban kita diterima oleh Allah SWT.</p><p>Total hewan qurban yang terkumpul adalah 10 ekor sapi dan 25 ekor kambing. Daging qurban telah didistribusikan kepada yang berhak menerima di lingkungan sekitar masjid.</p>',
            'image' => null, // Biarkan kosong untuk contoh, atau isi dengan path gambar
            'user_id' => $adminUser->id,
            'created_at' => now()->subDays(5),
        ]);

        RagamInfo::create([
            'title' => 'Jadwal Kajian Rutin Pekanan di Masjid Al-Ikhlash',
            'content' => '<p>Berikut adalah jadwal kajian rutin yang diselenggarakan di Masjid Jami\' Al-Ikhlash setiap pekannya:</p><ul><li><strong>Senin Malam:</strong> Kajian Tafsir Al-Qur\'an bersama Ustadz Fulan.</li><li><strong>Rabu Ba\'da Maghrib:</strong> Kajian Fiqih Ibadah.</li><li><strong>Jumat Pagi:</strong> Kajian Khusus Muslimah.</li></ul><p>Mari kita ramaikan majelis ilmu untuk menambah wawasan keislaman kita.</p>',
            'image' => null,
            'user_id' => $adminUser->id,
            'created_at' => now()->subDays(2),
        ]);
    }
}
