<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alamat;
use App\Models\Beasiswa;
use App\Models\Organisasi;
use App\Models\Pendaftaran_Beasiswa;
use App\Models\Prestasi;
use App\Models\Profile;
use App\Models\Universitas;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Alamat::factory(10)->create();
        Organisasi::factory(10)->create();
        Prestasi::factory(10)->create();
        Profile::factory(10)->create();
        Universitas::factory(10)->create();
        Pendaftaran_Beasiswa::factory(100)->create();
        Beasiswa::factory(2)->create();

    }
}
