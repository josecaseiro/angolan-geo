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
        if (Provincia::count() != 18 || Municipio::count() < 164) {

            Provincia::firstOrCreate(['name' => 'Bengo']);
            Municipio::firstOrCreate(['name' => 'Ambriz', 'provincia_id' => 1]);
            Municipio::firstOrCreate(['name' => 'Bula Atumba', 'provincia_id' => 1]);
            Municipio::firstOrCreate(['name' => 'Dande', 'provincia_id' => 1]);
            Municipio::firstOrCreate(['name' => 'Dembos', 'provincia_id' => 1]);
            Municipio::firstOrCreate(['name' => 'Nambuangongo', 'provincia_id' => 1]);
            Municipio::firstOrCreate(['name' => 'Pango Aluquém', 'provincia_id' => 1]);

            Provincia::firstOrCreate(['name' => 'Benguela']);
            Municipio::firstOrCreate(['name' => 'Balombo', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Baía Farta', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Benguela', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Bocoio', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Caimbambo', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Catumbela', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Chongorói', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Cubal', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Ganda', 'provincia_id' => 2]);
            Municipio::firstOrCreate(['name' => 'Lobito', 'provincia_id' => 2]);

            Provincia::firstOrCreate(['name' => 'Bié']);
            Municipio::firstOrCreate(['name' => 'Andulo', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Camacupa', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Catabola', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Chinguar', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Cunhinga', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Cuemba', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Cuito', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Nharea', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Chitembo', 'provincia_id' => 3]);
            Municipio::firstOrCreate(['name' => 'Ucuma', 'provincia_id' => 3]);

            Provincia::firstOrCreate(['name' => 'Cabinda']);
            Municipio::firstOrCreate(['name' => 'Belize', 'provincia_id' => 4]);
            Municipio::firstOrCreate(['name' => 'Buco Zau', 'provincia_id' => 4]);
            Municipio::firstOrCreate(['name' => 'Cabinda', 'provincia_id' => 4]);
            Municipio::firstOrCreate(['name' => 'Cacongo', 'provincia_id' => 4]);

            Provincia::firstOrCreate(['name' => 'Cuando Cubango']);
            Municipio::firstOrCreate(['name' => 'Calai', 'provincia_id' => 5]);
            Municipio::firstOrCreate(['name' => 'Cuangar', 'provincia_id' => 5]);
            Municipio::firstOrCreate(['name' => 'Cuchi', 'provincia_id' => 5]);
            Municipio::firstOrCreate(['name' => 'Cuito Cuanavale', 'provincia_id' => 5]);
            Municipio::firstOrCreate(['name' => 'Dirico', 'provincia_id' => 5]);
            Municipio::firstOrCreate(['name' => 'Mavinga', 'provincia_id' => 5]);
            Municipio::firstOrCreate(['name' => 'Menongue', 'provincia_id' => 5]);
            Municipio::firstOrCreate(['name' => 'Nancova', 'provincia_id' => 5]);
            Municipio::firstOrCreate(['name' => 'Rivungo', 'provincia_id' => 5]);

            Provincia::firstOrCreate(['name' => 'Cuanza Norte']);
            Municipio::firstOrCreate(['name' => 'Ambaca', 'provincia_id' => 6]);
            Municipio::firstOrCreate(['name' => 'Banga', 'provincia_id' => 6]);
            Municipio::firstOrCreate(['name' => 'Bolongongo', 'provincia_id' => 6]);
            Municipio::firstOrCreate(['name' => 'Cambambe', 'provincia_id' => 6]);
            Municipio::firstOrCreate(['name' => 'Cazengo', 'provincia_id' => 6]);
            Municipio::firstOrCreate(['name' => 'Golungo Alto', 'provincia_id' => 6]);
            Municipio::firstOrCreate(['name' => 'Lucala', 'provincia_id' => 6]);
            Municipio::firstOrCreate(['name' => 'Quiculungo', 'provincia_id' => 6]);
            Municipio::firstOrCreate(['name' => 'Samba Caju', 'provincia_id' => 6]);

            Provincia::firstOrCreate(['name' => 'Cuanza Sul']);
            Municipio::firstOrCreate(['name' => 'Amboim', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Cassongue', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Conda', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Ebo', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Libolo', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Mussende', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Porto Amboim', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Quibala', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Quilenda', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Seles', 'provincia_id' => 7]);
            Municipio::firstOrCreate(['name' => 'Sumbe', 'provincia_id' => 7]);

            Provincia::firstOrCreate(['name' => 'Cunene']);
            Municipio::firstOrCreate(['name' => 'Cahama', 'provincia_id' => 8]);
            Municipio::firstOrCreate(['name' => 'Cuanhama', 'provincia_id' => 8]);
            Municipio::firstOrCreate(['name' => 'Curoca', 'provincia_id' => 8]);
            Municipio::firstOrCreate(['name' => 'Cuvelai', 'provincia_id' => 8]);
            Municipio::firstOrCreate(['name' => 'Namacunde', 'provincia_id' => 8]);
            Municipio::firstOrCreate(['name' => 'Ombadja', 'provincia_id' => 8]);

            Provincia::firstOrCreate(['name' => 'Huambo']);
            Municipio::firstOrCreate(['name' => 'Bailundo', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Caála', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Ekunha', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Huambo', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Londuimbali', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Longonjo', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Mungo', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Tchicala Tcholohanga', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Tchindjenje', 'provincia_id' => 9]);
            Municipio::firstOrCreate(['name' => 'Ucuma', 'provincia_id' => 9]);

            Provincia::firstOrCreate(['name' => 'Huíla']);
            Municipio::firstOrCreate(['name' => 'Caconda', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Cacula', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Caluquembe', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Chiange', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Chibia', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Chicomba', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Chipindo', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Humpata', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Jamba', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Lubango', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Matala', 'provincia_id' => 10]);
            Municipio::firstOrCreate(['name' => 'Quilengues', 'provincia_id' => 10]);

            Provincia::firstOrCreate(['name' => 'Luanda']);
            Municipio::firstOrCreate(['name' => 'Belas', 'provincia_id' => 11]);
            Municipio::firstOrCreate(['name' => 'Cacuaco', 'provincia_id' => 11]);
            Municipio::firstOrCreate(['name' => 'Cazenga', 'provincia_id' => 11]);
            Municipio::firstOrCreate(['name' => 'Ícolo e Bengo', 'provincia_id' => 11]);
            Municipio::firstOrCreate(['name' => 'Luanda', 'provincia_id' => 11]);
            Municipio::firstOrCreate(['name' => 'Quiçama', 'provincia_id' => 11]);
            Municipio::firstOrCreate(['name' => 'Talatona', 'provincia_id' => 11]);
            Municipio::firstOrCreate(['name' => 'Viana', 'provincia_id' => 11]);
            Municipio::firstOrCreate(['name' => 'Vila de Cacuaco', 'provincia_id' => 11]);

            Provincia::firstOrCreate(['name' => 'Lunda Norte']);
            Municipio::firstOrCreate(['name' => 'Cambulo', 'provincia_id' => 12]);
            Municipio::firstOrCreate(['name' => 'Capenda-Camulemba', 'provincia_id' => 12]);
            Municipio::firstOrCreate(['name' => 'Caungula', 'provincia_id' => 12]);
            Municipio::firstOrCreate(['name' => 'Chitato', 'provincia_id' => 12]);
            Municipio::firstOrCreate(['name' => 'Cuango', 'provincia_id' => 12]);
            Municipio::firstOrCreate(['name' => 'Cuilo', 'provincia_id' => 12]);
            Municipio::firstOrCreate(['name' => 'Lóvua', 'provincia_id' => 12]);
            Municipio::firstOrCreate(['name' => 'Lubalo', 'provincia_id' => 12]);

            Provincia::firstOrCreate(['name' => 'Lunda Sul']);
            Municipio::firstOrCreate(['name' => 'Cacolo', 'provincia_id' => 13]);
            Municipio::firstOrCreate(['name' => 'Dala', 'provincia_id' => 13]);
            Municipio::firstOrCreate(['name' => 'Muconda', 'provincia_id' => 13]);
            Municipio::firstOrCreate(['name' => 'Saurimo', 'provincia_id' => 13]);

            Provincia::firstOrCreate(['name' => 'Malanje']);
            Municipio::firstOrCreate(['name' => 'Cacuso', 'provincia_id' => 14]);
            Municipio::firstOrCreate(['name' => 'Calandula', 'provincia_id' => 14]);
            Municipio::firstOrCreate(['name' => 'Cambundi-Catembo', 'provincia_id' => 14]);
            Municipio::firstOrCreate(['name' => 'Cangandala', 'provincia_id' => 14]);
            Municipio::firstOrCreate(['name' => 'Malanje', 'provincia_id' => 14]);
            Municipio::firstOrCreate(['name' => 'Marimba', 'provincia_id' => 14]);
            Municipio::firstOrCreate(['name' => 'Massango', 'provincia_id' => 14]);
            Municipio::firstOrCreate(['name' => 'Mucari', 'provincia_id' => 14]);
            Municipio::firstOrCreate(['name' => 'Quela', 'provincia_id' => 14]);

            Provincia::firstOrCreate(['name' => 'Moxico']);
            Municipio::firstOrCreate(['name' => 'Alto Zambeze', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Bundas', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Camanongue', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Cameia', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Léua', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Luacano', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Luchazes', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Luena', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Lumeje', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Moxico', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Léua', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Luchazes', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Luena', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Lumeje', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Moxico', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Muié', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Namacunde', 'provincia_id' => 15]);
            Municipio::firstOrCreate(['name' => 'Ombadja', 'provincia_id' => 15]);

            Provincia::firstOrCreate(['name' => 'Namibe']);
            Municipio::firstOrCreate(['name' => 'Bibala', 'provincia_id' => 16]);
            Municipio::firstOrCreate(['name' => 'Camucuio', 'provincia_id' => 16]);
            Municipio::firstOrCreate(['name' => 'Moçâmedes', 'provincia_id' => 16]);
            Municipio::firstOrCreate(['name' => 'Tômbua', 'provincia_id' => 16]);

            Provincia::firstOrCreate(['name' => 'Uíge']);
            Municipio::firstOrCreate(['name' => 'Alto Cauale', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Ambuila', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Bembe', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Buengas', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Bungo', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Damba', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Milunga', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Negage', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Puri', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Quitexe', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Sanza Pombo', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Songo', 'provincia_id' => 17]);
            Municipio::firstOrCreate(['name' => 'Uíge', 'provincia_id' => 17]);

            Provincia::firstOrCreate(['name' => 'Zaire']);
            Municipio::firstOrCreate(['name' => 'Cuimba', 'provincia_id' => 18]);
            Municipio::firstOrCreate(['name' => "M'banza Kongo", 'provincia_id' => 18]);
            Municipio::firstOrCreate(['name' => 'Noqui', 'provincia_id' => 18]);
            Municipio::firstOrCreate(['name' => 'Nzeto', 'provincia_id' => 18]);
            Municipio::firstOrCreate(['name' => 'Soyo', 'provincia_id' => 18]);
            Municipio::firstOrCreate(['name' => 'Tomboco', 'provincia_id' => 18]);
        }
    }
}
