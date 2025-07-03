<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'email'     => 'pendiabadikarya@gmail.com',
            'whatsapp'  => '+62 853 3805 3331',
            'address'   => 'Jln. Gigit Sari No.3 Jimbaran, Bali, Indonesia',
            'instagram' => 'https://instagram.com/pendiabadikarya',
        ]);
    }
}
