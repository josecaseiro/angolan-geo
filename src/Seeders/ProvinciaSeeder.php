<?php

// database/seeders/ProvinciaSeeder.php
namespace Josecaseiro\AngolanGeo\Seeders;

use Josecaseiro\AngolanGeo\Models\Municipio;
use Illuminate\Database\Seeder;
use Josecaseiro\AngolanGeo\Models\Provincia;
use DB;

class ProvinciaSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('provincias')->truncate();
        DB::table('municipios')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Provincia::create(['name' => 'Bengo']);
        Municipio::created(['name' => 'Ambriz', 'provincia_id' => 1]);
        Municipio::created(['name' => 'Bula Atumba', 'provincia_id' => 1]);
        Municipio::created(['name' => 'Dande', 'provincia_id' => 1]);
        Municipio::created(['name' => 'Dembos', 'provincia_id' => 1]);
        Municipio::created(['name' => 'Nambuangongo', 'provincia_id' => 1]);
        Municipio::created(['name' => 'Pango Aluquém', 'provincia_id' => 1]);

        Provincia::create(['name' => 'Benguela']);
        Municipio::created(['name' => 'Balombo', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Baía Farta', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Benguela', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Bocoio', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Caimbambo', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Catumbela', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Chongorói', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Cubal', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Ganda', 'provincia_id' => 2]);
        Municipio::created(['name' => 'Lobito', 'provincia_id' => 2]);

        Provincia::create(['name' => 'Bié']);
        Municipio::created(['name' => 'Andulo', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Camacupa', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Catabola', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Chinguar', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Cunhinga', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Cuemba', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Cuito', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Nharea', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Chitembo', 'provincia_id' => 3]);
        Municipio::created(['name' => 'Ucuma', 'provincia_id' => 3]);

        Provincia::create(['name' => 'Cabinda']);
        Municipio::created(['name' => 'Belize', 'provincia_id' => 4]);
        Municipio::created(['name' => 'Buco Zau', 'provincia_id' => 4]);
        Municipio::created(['name' => 'Cabinda', 'provincia_id' => 4]);
        Municipio::created(['name' => 'Cacongo', 'provincia_id' => 4]);

        Provincia::create(['name' => 'Cuando Cubango']);
        Municipio::created(['name' => 'Calai', 'provincia_id' => 5]);
        Municipio::created(['name' => 'Cuangar', 'provincia_id' => 5]);
        Municipio::created(['name' => 'Cuchi', 'provincia_id' => 5]);
        Municipio::created(['name' => 'Cuito Cuanavale', 'provincia_id' => 5]);
        Municipio::created(['name' => 'Dirico', 'provincia_id' => 5]);
        Municipio::created(['name' => 'Mavinga', 'provincia_id' => 5]);
        Municipio::created(['name' => 'Menongue', 'provincia_id' => 5]);
        Municipio::created(['name' => 'Nancova', 'provincia_id' => 5]);
        Municipio::created(['name' => 'Rivungo', 'provincia_id' => 5]);

        Provincia::create(['name' => 'Cuanza Norte']);
        Municipio::created(['name' => 'Ambaca', 'provincia_id' => 6]);
        Municipio::created(['name' => 'Banga', 'provincia_id' => 6]);
        Municipio::created(['name' => 'Bolongongo', 'provincia_id' => 6]);
        Municipio::created(['name' => 'Cambambe', 'provincia_id' => 6]);
        Municipio::created(['name' => 'Cazengo', 'provincia_id' => 6]);
        Municipio::created(['name' => 'Golungo Alto', 'provincia_id' => 6]);
        Municipio::created(['name' => 'Lucala', 'provincia_id' => 6]);
        Municipio::created(['name' => 'Quiculungo', 'provincia_id' => 6]);
        Municipio::created(['name' => 'Samba Caju', 'provincia_id' => 6]);

        Provincia::create(['name' => 'Cuanza Sul']);
        Municipio::created(['name' => 'Amboim', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Cassongue', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Conda', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Ebo', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Libolo', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Mussende', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Porto Amboim', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Quibala', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Quilenda', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Seles', 'provincia_id' => 7]);
        Municipio::created(['name' => 'Sumbe', 'provincia_id' => 7]);

        Provincia::create(['name' => 'Cunene']);
        Municipio::created(['name' => 'Cahama', 'provincia_id' => 8]);
        Municipio::created(['name' => 'Cuanhama', 'provincia_id' => 8]);
        Municipio::created(['name' => 'Curoca', 'provincia_id' => 8]);
        Municipio::created(['name' => 'Cuvelai', 'provincia_id' => 8]);
        Municipio::created(['name' => 'Namacunde', 'provincia_id' => 8]);
        Municipio::created(['name' => 'Ombadja', 'provincia_id' => 8]);

        Provincia::create(['name' => 'Huambo']);
        Municipio::created(['name' => 'Bailundo', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Caála', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Ekunha', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Huambo', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Londuimbali', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Longonjo', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Mungo', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Tchicala Tcholohanga', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Tchindjenje', 'provincia_id' => 9]);
        Municipio::created(['name' => 'Ucuma', 'provincia_id' => 9]);

        Provincia::create(['name' => 'Huíla']);
        Municipio::created(['name' => 'Caconda', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Cacula', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Caluquembe', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Chiange', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Chibia', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Chicomba', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Chipindo', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Humpata', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Jamba', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Lubango', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Matala', 'provincia_id' => 10]);
        Municipio::created(['name' => 'Quilengues', 'provincia_id' => 10]);

        Provincia::create(['name' => 'Luanda']);
        Municipio::created(['name' => 'Belas', 'provincia_id' => 11]);
        Municipio::created(['name' => 'Cacuaco', 'provincia_id' => 11]);
        Municipio::created(['name' => 'Cazenga', 'provincia_id' => 11]);
        Municipio::created(['name' => 'Ícolo e Bengo', 'provincia_id' => 11]);
        Municipio::created(['name' => 'Luanda', 'provincia_id' => 11]);
        Municipio::created(['name' => 'Quiçama', 'provincia_id' => 11]);
        Municipio::created(['name' => 'Talatona', 'provincia_id' => 11]);
        Municipio::created(['name' => 'Viana', 'provincia_id' => 11]);
        Municipio::created(['name' => 'Vila de Cacuaco', 'provincia_id' => 11]);

        Provincia::create(['name' => 'Lunda Norte']);
        Municipio::created(['name' => 'Cambulo', 'provincia_id' => 12]);
        Municipio::created(['name' => 'Capenda-Camulemba', 'provincia_id' => 12]);
        Municipio::created(['name' => 'Caungula', 'provincia_id' => 12]);
        Municipio::created(['name' => 'Chitato', 'provincia_id' => 12]);
        Municipio::created(['name' => 'Cuango', 'provincia_id' => 12]);
        Municipio::created(['name' => 'Cuilo', 'provincia_id' => 12]);
        Municipio::created(['name' => 'Lóvua', 'provincia_id' => 12]);
        Municipio::created(['name' => 'Lubalo', 'provincia_id' => 12]);

        Provincia::create(['name' => 'Lunda Sul']);
        Municipio::created(['name' => 'Cacolo', 'provincia_id' => 13]);
        Municipio::created(['name' => 'Dala', 'provincia_id' => 13]);
        Municipio::created(['name' => 'Muconda', 'provincia_id' => 13]);
        Municipio::created(['name' => 'Saurimo', 'provincia_id' => 13]);

        Provincia::create(['name' => 'Malanje']);
        Municipio::created(['name' => 'Cacuso', 'provincia_id' => 14]);
        Municipio::created(['name' => 'Calandula', 'provincia_id' => 14]);
        Municipio::created(['name' => 'Cambundi-Catembo', 'provincia_id' => 14]);
        Municipio::created(['name' => 'Cangandala', 'provincia_id' => 14]);
        Municipio::created(['name' => 'Malanje', 'provincia_id' => 14]);
        Municipio::created(['name' => 'Marimba', 'provincia_id' => 14]);
        Municipio::created(['name' => 'Massango', 'provincia_id' => 14]);
        Municipio::created(['name' => 'Mucari', 'provincia_id' => 14]);
        Municipio::created(['name' => 'Quela', 'provincia_id' => 14]);

        Provincia::create(['name' => 'Moxico']);
        Municipio::created(['name' => 'Alto Zambeze', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Bundas', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Camanongue', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Cameia', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Léua', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Luacano', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Luchazes', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Luena', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Lumeje', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Moxico', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Léua', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Luchazes', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Luena', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Lumeje', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Moxico', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Muié', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Namacunde', 'provincia_id' => 15]);
        Municipio::created(['name' => 'Ombadja', 'provincia_id' => 15]);

        Provincia::create(['name' => 'Namibe']);
        Municipio::created(['name' => 'Bibala', 'provincia_id' => 16]);
        Municipio::created(['name' => 'Camucuio', 'provincia_id' => 16]);
        Municipio::created(['name' => 'Moçâmedes', 'provincia_id' => 16]);
        Municipio::created(['name' => 'Tômbua', 'provincia_id' => 16]);

        Provincia::create(['name' => 'Uíge']);
        Municipio::created(['name' => 'Alto Cauale', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Ambuila', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Bembe', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Buengas', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Bungo', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Damba', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Milunga', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Negage', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Puri', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Quitexe', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Sanza Pombo', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Songo', 'provincia_id' => 17]);
        Municipio::created(['name' => 'Uíge', 'provincia_id' => 17]);

        Provincia::create(['name' => 'Zaire']);
        Municipio::created(['name' => 'Cuimba', 'provincia_id' => 18]);
        Municipio::created(['name' => "M'banza Kongo", 'provincia_id' => 18]);
        Municipio::created(['name' => 'Noqui', 'provincia_id' => 18]);
        Municipio::created(['name' => 'Nzeto', 'provincia_id' => 18]);
        Municipio::created(['name' => 'Soyo', 'provincia_id' => 18]);
        Municipio::created(['name' => 'Tomboco', 'provincia_id' => 18]);
    }
}
