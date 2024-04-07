<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\Specialization;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([

            UserSeeder::class,
            RoleAndPermissionSeeder::class,
            SpecializationSeeder::class,
            CountrySeeder::class,

        ]);
    }
}
