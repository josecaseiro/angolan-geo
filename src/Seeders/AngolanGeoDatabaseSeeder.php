<?php

namespace Josecaseiro\AngolanGeo\Seeders;

use Illuminate\Database\Seeder;

class AngolanGeoDatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([ProvinciaSeeder::class]);
    }
}
