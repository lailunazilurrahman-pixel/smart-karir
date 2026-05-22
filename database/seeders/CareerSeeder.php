<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $careers = [

            // ================= TEKNOLOGI =================

            [
                'name' => 'Software Engineer',
                'category' => 'Teknologi',
                'skill' => 'Ngoding,PHP,Laravel',
                'description' => 'Membangun aplikasi dan sistem digital',
                'score' => 95,
            ],

            [
                'name' => 'Frontend Developer',
                'category' => 'Teknologi',
                'skill' => 'HTML,CSS,JavaScript',
                'description' => 'Membangun tampilan website interaktif',
                'score' => 94,
            ],

            [
                'name' => 'Backend Developer',
                'category' => 'Teknologi',
                'skill' => 'Laravel,PHP,Database',
                'description' => 'Mengembangkan sistem backend aplikasi',
                'score' => 95,
            ],

            [
                'name' => 'Web Developer',
                'category' => 'Teknologi',
                'skill' => 'Laravel,PHP,HTML,CSS',
                'description' => 'Membuat website modern dan interaktif',
                'score' => 93,
            ],

            [
                'name' => 'Mobile Developer',
                'category' => 'Teknologi',
                'skill' => 'Flutter,Kotlin',
                'description' => 'Membuat aplikasi Android dan iOS',
                'score' => 93,
            ],

            [
                'name' => 'UI UX Designer',
                'category' => 'Teknologi',
                'skill' => 'UIUX,Figma,Desain',
                'description' => 'Mendesain tampilan dan pengalaman pengguna aplikasi',
                'score' => 95,
            ],

            [
                'name' => 'Product Designer',
                'category' => 'Teknologi',
                'skill' => 'UIUX,Figma',
                'description' => 'Merancang produk digital yang nyaman digunakan',
                'score' => 93,
            ],

            [
                'name' => 'Web Designer',
                'category' => 'Teknologi',
                'skill' => 'UIUX,Desain',
                'description' => 'Membuat desain website modern dan menarik',
                'score' => 91,
            ],

            [
                'name' => 'Cyber Security',
                'category' => 'Teknologi',
                'skill' => 'Keamanan Sistem,Networking',
                'description' => 'Menjaga keamanan data dan sistem',
                'score' => 92,
            ],

            [
                'name' => 'Data Analyst',
                'category' => 'Teknologi',
                'skill' => 'Analisa Data,Excel',
                'description' => 'Menganalisa data untuk kebutuhan bisnis',
                'score' => 91,
            ],

            [
                'name' => 'AI Engineer',
                'category' => 'Teknologi',
                'skill' => 'Artificial Intelligence,Python',
                'description' => 'Mengembangkan sistem kecerdasan buatan',
                'score' => 96,
            ],

            // ================= BISNIS =================

            [
                'name' => 'Entrepreneur',
                'category' => 'Bisnis',
                'skill' => 'Jualan,Leadership',
                'description' => 'Membangun dan mengembangkan usaha',
                'score' => 95,
            ],

            [
                'name' => 'Sales Executive',
                'category' => 'Bisnis',
                'skill' => 'Jualan,Komunikasi',
                'description' => 'Menjual produk dan layanan perusahaan',
                'score' => 91,
            ],

            [
                'name' => 'Marketing Specialist',
                'category' => 'Bisnis',
                'skill' => 'Marketing,Komunikasi',
                'description' => 'Mempromosikan produk dan bisnis',
                'score' => 90,
            ],

            [
                'name' => 'Digital Marketer',
                'category' => 'Bisnis',
                'skill' => 'Marketing,Content Creator',
                'description' => 'Melakukan pemasaran digital modern',
                'score' => 92,
            ],

            [
                'name' => 'Business Analyst',
                'category' => 'Bisnis',
                'skill' => 'Analisa Data,Komunikasi',
                'description' => 'Menganalisa strategi bisnis perusahaan',
                'score' => 89,
            ],

            // ================= KOMUNIKASI =================

            [
                'name' => 'Public Relation',
                'category' => 'Komunikasi',
                'skill' => 'Komunikasi,Public Speaking',
                'description' => 'Membangun hubungan baik dengan publik',
                'score' => 92,
            ],

            [
                'name' => 'Customer Service',
                'category' => 'Komunikasi',
                'skill' => 'Komunikasi,Pelayanan',
                'description' => 'Melayani dan membantu pelanggan',
                'score' => 90,
            ],

            [
                'name' => 'HRD',
                'category' => 'Komunikasi',
                'skill' => 'Komunikasi,Leadership',
                'description' => 'Mengelola sumber daya manusia perusahaan',
                'score' => 91,
            ],

            [
                'name' => 'Presenter',
                'category' => 'Komunikasi',
                'skill' => 'Public Speaking,Komunikasi',
                'description' => 'Menyampaikan informasi di depan publik',
                'score' => 89,
            ],

            [
                'name' => 'MC',
                'category' => 'Komunikasi',
                'skill' => 'Public Speaking,Komunikasi',
                'description' => 'Memandu acara formal dan non formal',
                'score' => 88,
            ],

            [
                'name' => 'Motivator',
                'category' => 'Komunikasi',
                'skill' => 'Public Speaking,Leadership',
                'description' => 'Memberikan motivasi dan inspirasi',
                'score' => 90,
            ],

            // ================= PENDIDIKAN =================

            [
                'name' => 'Teacher',
                'category' => 'Pendidikan',
                'skill' => 'Mengajar,Komunikasi',
                'description' => 'Mengajar dan membimbing siswa',
                'score' => 91,
            ],

            [
                'name' => 'Tutor',
                'category' => 'Pendidikan',
                'skill' => 'Komunikasi,Mengajar',
                'description' => 'Memberikan pembelajaran privat',
                'score' => 87,
            ],

            [
                'name' => 'Dosen',
                'category' => 'Pendidikan',
                'skill' => 'Mengajar,Public Speaking',
                'description' => 'Mengajar di perguruan tinggi',
                'score' => 93,
            ],

            // ================= HUKUM =================

            [
                'name' => 'Lawyer',
                'category' => 'Hukum',
                'skill' => 'Public Speaking,Analisa',
                'description' => 'Membantu penyelesaian masalah hukum',
                'score' => 94,
            ],

            [
                'name' => 'Political Analyst',
                'category' => 'Hukum',
                'skill' => 'Pengamat Politik,Analisa',
                'description' => 'Menganalisa isu politik dan pemerintahan',
                'score' => 89,
            ],

            // ================= KESEHATAN =================

            [
                'name' => 'Doctor',
                'category' => 'Kesehatan',
                'skill' => 'Komunikasi,Kesehatan',
                'description' => 'Membantu dan merawat pasien',
                'score' => 96,
            ],

            [
                'name' => 'Nurse',
                'category' => 'Kesehatan',
                'skill' => 'Pelayanan,Kesehatan',
                'description' => 'Memberikan perawatan kepada pasien',
                'score' => 90,
            ],

            [
                'name' => 'Ahli Gizi',
                'category' => 'Kesehatan',
                'skill' => 'Kesehatan,Analisa',
                'description' => 'Mengatur pola makan dan gizi',
                'score' => 88,
            ],

            // ================= BAHASA =================

            [
                'name' => 'Translator',
                'category' => 'Bahasa',
                'skill' => 'Bahasa Inggris,Menulis',
                'description' => 'Menerjemahkan bahasa asing',
                'score' => 92,
            ],

            [
                'name' => 'Content Writer',
                'category' => 'Bahasa',
                'skill' => 'Menulis,Content Creator',
                'description' => 'Membuat artikel dan konten digital',
                'score' => 88,
            ],

            [
                'name' => 'Copywriter',
                'category' => 'Bahasa',
                'skill' => 'Menulis,Marketing',
                'description' => 'Menulis promosi dan iklan kreatif',
                'score' => 90,
            ],

            // ================= SENI & MULTIMEDIA =================

            [
                'name' => 'Graphic Designer',
                'category' => 'Seni',
                'skill' => 'Desain,Adobe Photoshop',
                'description' => 'Membuat desain visual kreatif',
                'score' => 91,
            ],

            [
                'name' => 'Video Editor',
                'category' => 'Multimedia',
                'skill' => 'Edit Video,Adobe Premiere',
                'description' => 'Mengedit video kreatif dan profesional',
                'score' => 89,
            ],

            [
                'name' => 'Animator',
                'category' => 'Multimedia',
                'skill' => 'Animasi,Desain',
                'description' => 'Membuat animasi digital kreatif',
                'score' => 90,
            ],

            [
                'name' => 'Photographer',
                'category' => 'Multimedia',
                'skill' => 'Fotografi,Editing',
                'description' => 'Menghasilkan foto profesional',
                'score' => 88,
            ],

            [
                'name' => 'Content Creator',
                'category' => 'Multimedia',
                'skill' => 'Content Creator,Komunikasi',
                'description' => 'Membuat konten digital kreatif',
                'score' => 92,
            ],

        ];

        foreach ($careers as $career) {

            Career::create($career);

        }
    }
}