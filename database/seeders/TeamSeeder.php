<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'Samsuri',
                'position' => 'Komisaris',
                'image' => 'samsuri.png',
                'image_path' => 'images/team/samsuri.png',
                'email' => '',
                'instagram' => '',
                'linkedin' => '',
                'whatsapp' => '',
            ],
            [
                'name' => 'Marta Tobing',
                'position' => 'Executive Admin',
                'image' => 'marta tobing.png',
                'image_path' => 'images/team/marta tobing.png',
                'email' => '',
                'instagram' => '',
                'linkedin' => '',
                'whatsapp' => '',
            ],
            [
                'name' => 'Supandi',
                'position' => 'Direktur',
                'image' => 'supandi.png',
                'image_path' => 'images/team/supandi.png',
                'email' => '',
                'instagram' => '',
                'linkedin' => '',
                'whatsapp' => '',
            ],
        ];

        foreach ($teamMembers as $member) {
            Team::create($member);
        }
    }
}
