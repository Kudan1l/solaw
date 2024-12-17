<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('consultants')->insert([
            [
               'name' => 'Dr. Budi Santoso, SH., M.H.',
                'email' => 'budi@email.com',
                'phone_number' => '08123456789',
                'experience_years' => 10,
                'about' => 'Dr. Budi Santoso, SH., M.H. adalah seorang konsultan hukum berpengalaman lebih dari 10 tahun di bidang hukum keluarga dan pidana. Beliau memiliki rekam jejak yang solid dalam menangani kasus perceraian, hak asuh anak, serta berbagai kasus pidana. Budi dikenal dengan pendekatan yang empatik dan profesional dalam menyelesaikan masalah hukum kliennya.',
                'profile_photo' => 'https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'education' => 'Magister Hukum dari Universitas Padjajaran, Indonesia',
                'location' => 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Dewi Lestari, SH.',
                'email' => 'dewi@email.com',
                'phone_number' => '08234567890',
                'experience_years' => 7,
                'about' => 'Siti Dewi Lestari, SH. memiliki spesialisasi dalam kasus perdata seperti sengketa properti, kontrak bisnis, dan penyelesaian konflik antar perusahaan. Dengan lebih dari 7 tahun pengalaman, Dewi menawarkan solusi hukum yang berbasis pada negosiasi dan mediasi untuk mencapai kesepakatan yang adil bagi semua pihak.',
                'profile_photo' => 'https://plus.unsplash.com/premium_photo-1690407617542-2f210cf20d7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D',
                'education' => 'Sarjana Hukum dari Universitas Indonesia',
                'location' => 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andi Prasetyo, SH., M.H.',
                'email' => 'andi@email.com',
                'phone_number' => '08345678901',
                'experience_years' => 12,
                'about' => 'Andi Prasetyo, SH., M.H. adalah seorang konsultan hukum yang memiliki pengalaman luas dalam menangani kasus pidana dan hukum bisnis. Beliau memiliki keahlian dalam membela hak-hak klien dalam perkara pidana dan juga membantu perusahaan dalam menyelesaikan sengketa bisnis. Dengan pendekatan yang tegas dan efektif, Andi selalu mencari cara terbaik untuk membela kliennya.',
                'profile_photo' => 'https://plus.unsplash.com/premium_photo-1689977968861-9c91dbb16049?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'education' => 'Magister Hukum dari Universitas Gadjah Mada, Indonesia',
                'location' => 'Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('specialties')->insert([
            ['name' => 'Keluarga'],
            ['name' => 'Pidana'],
            ['name' => 'Perdata'],
            ['name' => 'Harta Warisan'],
            ['name' => 'Lingkungan'],
        ]);

        DB::table('consultant_specialties')->insert([
            ['consultant_id' => 1, 'specialty_id' => 1],
            ['consultant_id' => 1, 'specialty_id' => 2],
            ['consultant_id' => 2, 'specialty_id' => 3],
            ['consultant_id' => 3, 'specialty_id' => 2],
            ['consultant_id' => 3, 'specialty_id' => 4],
        ]);
    }
}
