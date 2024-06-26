<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegencySeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DaySeeder::class);
        $this->call(FlowerSeeder::class);
        $this->call(PelangganSeeder::class);
        $this->call(LanggananSeeder::class);
        $this->call(PesananSeeder::class);
    }
}
