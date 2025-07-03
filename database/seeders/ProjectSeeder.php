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
                'name' => 'Villas',
                'slug' => 'Villas',
                'category' => 'Sipil, Interior & MEP',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Nusa Dua, Badung, Bali, Indonesia',
                'description' => 'Perombakan total Villa 
                    Wantilan Nusa Dua dengan
                    3 bangunan kamar tidur
                    terpisah beserta landscape 
                    sekitar ',
            ],
            [
                'name' => 'Club House',
                'slug' => 'club-House',
                'category' => 'Sipil, Interior & MEP',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Nusa Dua, Badung, Bali, Indonesia',
                'description' => 'Perombakan total Club 
                    House Golf Course di Nusa 
                    Dua ',
            ],
            [
                'name' => 'Office',
                'slug' => 'Office',
                'category' => 'Sipil, Interior & MEP',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Nusa Dua, Badung, Bali, Indonesia',
                'description' => 'Perombakan total Back 
                        Office Golf Course di Nusa  
                        Dua',
            ],
            [
                'name' => 'Super Store',
                'slug' => 'Super-Store',
                'category' => 'Sipil, Interior & MEP',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Kuta, Badung, Bali, Indonesia',
                'description' => 'Pembangunan Superstore 
                        dan Office di Sunset Road',
            ],
            [
                'name' => 'Residence',
                'slug' => 'Residence',
                'category' => 'Sipil, Interior & MEP',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => null,
                'description' => ' Pembangunan Rumah Tinggal ',
            ],
            [
                'name' => 'Facility Maintenance',
                'slug' => 'Facility-Maintenance',
                'category' => 'Sipil, Interior & MEP    ',
                'client' => null,
                'year' => null,
                'budget' => null,
                'location' => 'Nusa Dua, Badung, Bali, Indonesia',
                'description' => 'Pembangunan Fasilitas
                        Maintenance (Workshop) 
                        Golf Course di Nusa Dua ',
            ],
        ];

        foreach ($projectsData as $data) {
            Project::create($data);
        }
    }
}
