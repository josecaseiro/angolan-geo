<?php

namespace Josecaseiro\AngolanGeo\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([ProvinciaSeeder::class]);
    }
}
