<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function kajian()
    {
        // In a real application, you would fetch these from a database
        $kajianList = [
            [
                'title' => 'Kajian Tafsir Al-Quran',
                'ustadz' => 'Ustadz Ahmad',
                'schedule' => 'Setiap Senin, 19:30 - 21:00',
                'location' => 'Ruang Utama Masjid',
                'description' => 'Kajian tafsir Al-Quran mingguan untuk memahami makna dan hikmah dari ayat-ayat Al-Quran.'
            ],
            [
                'title' => 'Kajian Fiqih Ibadah',
                'ustadz' => 'Ustadz Mahmud',
                'schedule' => 'Setiap Rabu, 19:30 - 21:00',
                'location' => 'Ruang Utama Masjid',
                'description' => 'Kajian tentang fiqih ibadah sehari-hari untuk meningkatkan kualitas ibadah.'
            ],
            [
                'title' => 'Kajian Sirah Nabawiyah',
                'ustadz' => 'Ustadz Ibrahim',
                'schedule' => 'Setiap Jumat, 16:00 - 17:30',
                'location' => 'Ruang Utama Masjid',
                'description' => 'Kajian tentang perjalanan hidup Rasulullah SAW dan hikmah yang dapat diambil.'
            ]
        ];

        return view('kegiatan.kajian', compact('kajianList'));
    }

    public function sosial()
    {
        // In a real application, you would fetch these from a database
        $socialActivities = [
            [
                'title' => 'Santunan Anak Yatim',
                'date' => '15 Ramadhan 1445 H',
                'location' => 'Aula Masjid',
                'description' => 'Program santunan untuk anak yatim dan dhuafa di sekitar lingkungan masjid.',
                'status' => 'Upcoming'
            ],
            [
                'title' => 'Pengobatan Gratis',
                'date' => 'Setiap Minggu pertama bulan',
                'location' => 'Halaman Masjid',
                'description' => 'Layanan pengobatan gratis untuk masyarakat sekitar masjid.',
                'status' => 'Regular'
            ],
            [
                'title' => 'Bazar Sembako Murah',
                'date' => '1 Ramadhan 1445 H',
                'location' => 'Halaman Masjid',
                'description' => 'Bazar sembako dengan harga murah untuk membantu masyarakat kurang mampu.',
                'status' => 'Upcoming'
            ]
        ];

        return view('kegiatan.sosial', compact('socialActivities'));
    }

    public function khusus()
    {
        // In a real application, you would fetch these from a database
        $specialEvents = [
            [
                'title' => 'Peringatan Isra Miraj',
                'date' => '27 Rajab 1445 H',
                'time' => '19:30 - 22:00',
                'location' => 'Ruang Utama Masjid',
                'description' => 'Peringatan Isra Miraj dengan ceramah dan doa bersama.',
                'status' => 'Upcoming'
            ],
            [
                'title' => 'Program Ramadhan',
                'date' => '1-30 Ramadhan 1445 H',
                'time' => 'Sesuai jadwal',
                'location' => 'Masjid',
                'description' => 'Rangkaian kegiatan selama bulan Ramadhan, termasuk buka puasa bersama, tarawih, dan kajian.',
                'status' => 'Upcoming'
            ],
            [
                'title' => 'Sholat Idul Adha & Penyembelihan Qurban',
                'date' => '10 Dzulhijjah 1445 H',
                'time' => '06:30 - selesai',
                'location' => 'Masjid dan sekitarnya',
                'description' => 'Sholat Idul Adha berjamaah dilanjutkan dengan penyembelihan dan pendistribusian daging qurban.',
                'status' => 'Upcoming'
            ]
        ];

        return view('kegiatan.khusus', compact('specialEvents'));
    }
}
