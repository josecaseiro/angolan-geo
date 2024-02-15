<?php

// database/migrations/2024_02_15_create_municipios_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

class CreateMunicipiosTable extends Migration
{
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('provincia_id')->constrained('provincias');
            // Add any additional fields you may need
            $table->timestamps();
        });

        //Artisan::call('db:seed', ['--class' => 'Josecaseiro\\AngolanGeo\\Seeders\\AngolanGeoDatabaseSeeder']);
    }

    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
