<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projectsData = [
            [
                'name' => 'VILLAS - Villa Wantilan Nusa Dua',
                'slug' => 'villas-villa-wantilan-nusa-dua',
                'category' => 'Villas',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Nusa Dua, Badung, Bali, Indonesia',
                'description' => 'Perombakan total Villa Wantilan Nusa Dua, meliputi 3 bangunan kamar tidur terpisah beserta penataan landscape sekitarnya. Proyek ini mencakup pekerjaan Sipil, Interior, dan MEP.',
            ],
            [
                'name' => 'CLUB HOUSE - Golf Course Nusa Dua',
                'slug' => 'club-house-golf-course-nusa-dua',
                'category' => 'Club House',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Nusa Dua, Badung, Bali, Indonesia',
                'description' => 'Perombakan total Club House Golf Course di Nusa Dua untuk meningkatkan fasilitas dan estetika. Lingkup pekerjaan meliputi Sipil, Interior, dan MEP.',
            ],
            [
                'name' => 'OFFICE - Back Office Golf Course',
                'slug' => 'office-back-office-golf-course',
                'category' => 'Office',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Nusa Dua, Badung, Bali, Indonesia',
                'description' => 'Perombakan total Back Office Golf Course di Nusa Dua, menciptakan ruang kerja yang lebih modern dan fungsional. Proyek ini mencakup aspek Sipil, Interior, dan MEP.',
            ],
            [
                'name' => 'SUPER STORE & OFFICE - Sunset Road',
                'slug' => 'super-store-office-sunset-road',
                'category' => 'Super Store',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Kuta, Badung, Bali, Indonesia',
                'description' => 'Pembangunan Superstore dan Kantor di kawasan strategis Sunset Road, dirancang untuk efisiensi operasional dan kenyamanan pengunjung. Meliputi pekerjaan Sipil, Interior, dan MEP.',
            ],
            [
                'name' => 'RESIDENCE - Rumah Tinggal Modern',
                'slug' => 'residence-rumah-tinggal-modern',
                'category' => 'Residence',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => null,
                'description' => 'Pembangunan unit rumah tinggal yang didesain secara modern dan fungsional, memenuhi kebutuhan hunian berkualitas tinggi. Proyek ini mencakup Sipil, Interior, dan MEP.',
            ],
            [
                'name' => 'FACILITY MAINTENANCE - Proyek Berkelanjutan',
                'slug' => 'facility-maintenance-proyek-berkelanjutan',
                'category' => 'Facility Maintenance',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Nusa Dua, Badung, Bali, Indonesia',
                'description' => 'Layanan pemeliharaan fasilitas berkelanjutan untuk memastikan semua infrastruktur dan bangunan berfungsi optimal serta terjaga kualitasnya. Mencakup perawatan Sipil, Interior, dan MEP.',
            ],
        ];

        foreach ($projectsData as $data) {
            Project::create($data);
        }
    }
}
