<?php


use Illuminate\Database\Seeder;
use App\Models\Provincia;
use App\Models\Municipio;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([ProvinciaSeeder::class]);
    }
}
