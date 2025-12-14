<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        if (Profile::count() > 0) {
            return;
        }

        Profile::create([
            'nama'      => 'SKA Infrastruktur',
            'deskripsi' => 'erusahaan yang bergerak di bidang konstruksi rumah, bangunan komersial, serta pengembangan properti.
 
Kami hadir sebagai mitra terpercaya bagi Anda yang membutuhkan layanan kontraktor profesional dengan hasil yang berkualitas, tepat waktu  dan sesuai standar keamanan.',
            'alamat'    => 'Jl. Raya Pajajaran No. 88 F, Kota Bogor',
            'telepon'   => '+62 812 3456 7890',
            'email'     => 'hello@SKApage.com',
            'logo'      => 'asset/logos.png',
        ]);
    }
}
