<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixTypoInProvincias extends Migration
{
    public function up()
    {
       if (!Schema::hasColumn('provincias', 'captital')) {
            Schema::table('provincias', function (Blueprint $table) {
                $table->dropColumn('captital');
            });
        }

        Schema::table( 'provincias',
            function (Blueprint $table) {
                $table->string('capital')->nullable();
            }
        );
    }

    public function down()
    {
         Schema::table('provincias', function (Blueprint $table) {
                $table->dropColumn('capital');
            });
    }
}
