<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\ProjectImage;

class ProjectImageSeeder extends Seeder
{
    public function run(): void
    {
        $projects = Project::all();
        $projectImageFilenames = [
            'Villas' => [
                'villa-nusa-dua.jpeg',
                'villa-nusa-dua (2).jpeg',
                'villa-nusa-dua (3).jpeg',
            ],
            'Club House' => [
                'club-house-golf-course-nusa-dua.jpeg',
                'club-house-golf-course-nusa-dua (2).jpeg',
                'club-house-golf-course-nusa-dua (3).jpeg',
                'club-house-golf-course-nusa-dua (4).jpeg',
                'club-house-golf-course-nusa-dua (5).jpeg',
            ],
            'Office' => [
                'back-office-nusa-dua.jpeg',
                'back-office-nusa-dua (2).jpeg',
                'back-office-nusa-dua (3).jpeg',
                'back-office-nusa-dua (4).jpeg',
                'back-office-nusa-dua (5).jpeg',
                'back-office-nusa-dua (6).jpeg',
                'back-office-nusa-dua (7).jpeg',
                'back-office-nusa-dua (8).jpeg',
                'back-office-nusa-dua (9).jpeg',
            ],
            'Super Store' => [
               
            ],
            'Residence' => [
              
            ],
            'Facility Maintenance' => [
                'facility-maintenance-nusa-dua.jpeg',
                'facility-maintenance-nusa-dua (2).jpeg',
                'facility-maintenance-nusa-dua (3).jpeg',
                'facility-maintenance-nusa-dua (4).jpeg',
                'facility-maintenance-nusa-dua (5).jpeg',
                'facility-maintenance-nusa-dua (6).jpeg',
            ],
        ];

        foreach ($projectImageFilenames as $projectName => $filenames) {
        $project = Project::where('name', $projectName)->first();

        if ($project) {
            foreach ($filenames as $file) {
                ProjectImage::create([
                    'name' => $file,
                    'path' => 'images/project/' . $file,
                    'project_id' => $project->id,
                ]);
            }       
        }
    }

    }
}
