<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Janin;

class JaninSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
                    [public_path('img/agambar (1).jpg'), 3, 'chia seed', 'Pada minggu ini terbentuk embrio berisi 100 sel', 0, 0, 1],
                    [public_path('img/agambar (2).jpg'), 4, 'biji cabe', 'Pada minggu ini terbentuk 2 lapisan sel yaitu eggblast dan hypoblast', 0, 10, 1],
                    [public_path('img/agambar (3).jpg'), 5, 'beras', 'Pada minggu ini terbentuk kepala dan ekor', 0, 0, 1],
                    [public_path('img/agambar (4).jpg'), 6, 'kacang polong', 'Pada minggu ini bayi sudah mulai melengkung dan memiliki ekor', 0, 0.5, 1],
                    [public_path('img/agambar (5).jpg'), 7, 'blueberry', 'Pada minggu ini, tulang ekor akan mulai menghilang', 0, 0.64, 1],
                    [public_path('img/agambar (6).jpg'), 8, 'raspberry', 'Pada minggu ini sel saraf mulai bercabang dan terhubung satu sama lain', 0.001, 1.6, 1],
                    [public_path('img/agambar (7).jpg'), 9, 'lengkeng', 'Pada minggu ini janin mulai bernapas dan bergerak', 0.002, 2.3, 1],
                    [public_path('img/agambar (8).jpg'), 10, 'manggis', 'Pada minggu ini terbentuk fitur wajah', 0.004, 3.1, 1],
                    [public_path('img/agambar (9).jpg'), 11, 'leci', 'Pada minggu ini panjang janin meningkat 1 cm', 0.007, 4.1, 1],
                    [public_path('img/agambar (10).jpg'), 12, 'rambutan', 'Pada minggu ini ukuran bayi meningkat 2 kali lipat', 0.014, 5.4, 1],
                    [public_path('img/agambar (11).jpg'), 13, 'persik', 'Pada minggu ini panjang bayi mencapai 3 inci', 0.023, 7.4, 2],
                    [public_path('img/agambar (12).jpg'), 14, 'jambu biji', 'Pada minggu ini bayi terus berkembang dnegan pesat', 0.043, 8.7, 2],
                    [public_path('img/agambar (13).jpg'), 15, 'pir', 'Pada minggu ini bayi mulai terlihat bergerak saat di USG', 0.07, 10.1, 2],
                    [public_path('img/agambar (14).jpg'), 16, 'alpukat', 'Pada minggu ini bayi sudah bisa menggenggam dan menendang', 0.1, 11.6, 2],
                    [public_path('img/agambar (15).jpg'), 17, 'paprika', 'Pada minggu ini terbentuk jenis kelamin bayi', 0.14, 13, 2],
                    [public_path('img/agambar (16).jpg'), 18, 'ubi jalar', 'Pada minggu ini bayi sudah bisa menggeliat, meninju dan menendang', 0.19, 14.2, 2],
                    [public_path('img/agambar (17).jpg'), 19, 'mangga', 'Pada minggu ini bayi semakin aktif', 0.24, 15.3, 2],
                    [public_path('img/agambar (18).jpg'), 20, 'labu siam', 'Pada minggu ini bayi sudah bisa menendang secara konstan', 0.3, 25.6, 2],
                    [public_path('img/agambar (19).jpg'), 21, 'pisang', 'Pada minggu ini panjang bayi sudah mencapai 26 cm', 0.36, 26.7, 2],
                    [public_path('img/agambar (20).jpg'), 22, 'terong', 'Pada minggu ini panca indra sudah mulai berfungsi', 0.43, 27.8, 2],
                    [public_path('img/agambar (21).jpg'), 23, 'buah naga', 'Pada minggu ini bayi semakin aktif dan saat yang tepat untuk babymoon', 0.5, 28.9, 2],
                    [public_path('img/agambar (22).jpg'), 24, 'jeruk bali', 'Pada minggu ini terbentuk otot', 0.6, 30, 2],
                    [public_path('img/agambar (23).jpg'), 25, 'blewah', 'Pada minggu ini kamu berpotensi sakit punggung, wasir dan sembelit karena bayimu semakin berkembang dan aktif', 0.66, 34.6, 2],
                    [public_path('img/agambar (24).jpg'), 26, 'kembang kol', 'Pada minggu ini ukuran bayi akan semkain besar sehingga kamu mungkin sulit untuk duduk, tidur dan berjalan', 0.76, 35.6, 2],
                    [public_path('img/agambar (25).jpg'), 27, 'selada', 'Pada minggu ini bayi semakin aktif dan akan sulit tidur di malam hari', 0.875, 36.6, 2],
                    [public_path('img/agambar (26).jpg'), 28, 'sawi putih', 'Pada minggu ini gerakan bayi akan semakin konstan', 1, 37.6, 3],
                    [public_path('img/agambar (27).jpg'), 29, 'kol', 'Pada minggu ini terbentuk otak', 1.2, 38.6, 3],
                    [public_path('img/agambar (28).jpg'), 30, 'labu kuning', 'Pada minggu ini terbentuk pipi chubby si kecil', 1.3, 39.9, 3],
                    [public_path('img/agambar (29).jpg'), 31, 'kelapa', 'Pada minggu ini terbentuk kulit yang halus', 1.5, 41.1, 3],
                    [public_path('img/agambar (30).jpg'), 32, 'melon', 'Pada minggu ini terbentuk lemak penyusun badan si kecil', 1.7, 42.4, 3],
                    [public_path('img/agambar (31).jpg'), 33, 'nanas', 'Pada minggu ini bayi semakin aktif dan sehat', 1.9, 43.7, 3],
                    [public_path('img/agambar (32).jpg'), 34, 'labu air', 'Pada minggu ini kepala bayi sudha mulai menghadap ke bawah', 2.1, 45, 3],
                    [public_path('img/agambar (33).jpg'), 35, 'pepaya', 'Pada minggu ini bayi semakin berat dan saatnya kamu mengambil cuti', 2.4, 46.2, 3],
                    [public_path('img/agambar (34).jpg'), 36, 'timun suri', 'Pada minggu ini mulai terjadi kontraksi-kontraksi kecil', 2.6, 47.4, 3],
                    [public_path('img/agambar (35).jpg'), 37, 'durian', 'Pada minggu ini kepala bayi sudha menghadap bawah', 2.9, 48.6, 3],
                    [public_path('img/agambar (36).jpg'), 38, 'nangka', 'Pada minggu ini bayi sudah siap lahir! Saatnya bersalin', 3.1, 49.8, 3],
                    [public_path('img/agambar (37).jpg'), 39, 'cempedak', 'Selamat menunggu persalinan, semoga bayimu sehat!', 3.3, 50.7, 3],
                    [public_path('img/agambar (38).jpg'), 40, 'semangka', 'Selamat menunggu persalinan, semoga bayimu sehat!', 3.5, 51.2, 3],
                    [public_path('img/agambar (39).jpg'), 41, 'semangka', 'Selamat menunggu persalinan, semoga bayimu sehat!', 3.6, 51.5, 3],
                    [public_path('img/agambar (40).jpg'), 42, 'semangka', 'Selamat menunggu persalinan, semoga bayimu sehat!', 3.7, 51.7, 3],
                    [public_path('img/agambar (41).jpg'), 43, 'bayi', 'Selamat menunggu persalinan, semoga bayimu sehat!', 3.8, 51.8, 3],
                    [public_path('img/agambar (42).jpg'), 44, 'bayi', 'Selamat menunggu persalinan, semoga bayimu sehat!', 3.9, 52, 3]
        ];
        for($i = 0; $i <= 41; $i++){
            DB::table('janins')->insert([
                'image_buah' => $data[$i][0],
                'age' => $data[$i][1],
                'buah' =>$data[$i][2],
                'deskripsi' => $data[$i][3],
                'weight' =>$data[$i][4],
                'height' => $data[$i][5],
                'trimester' => $data[$i][6]
                ]);
        }
    }
}
