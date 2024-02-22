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
            $prov = Provincia::all();
            foreach ($provincias as $prov) {
                $prov->delete();
            }
            Provincia::create(['name' => 'Bengo']);
            Municipio::create(['name' => 'Ambriz', 'provincia_id' => 1]);
            Municipio::create(['name' => 'Bula Atumba', 'provincia_id' => 1]);
            Municipio::create(['name' => 'Dande', 'provincia_id' => 1]);
            Municipio::create(['name' => 'Dembos', 'provincia_id' => 1]);
            Municipio::create(['name' => 'Nambuangongo', 'provincia_id' => 1]);
            Municipio::create(['name' => 'Pango Aluquém', 'provincia_id' => 1]);

            Provincia::create(['name' => 'Benguela']);
            Municipio::create(['name' => 'Balombo', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Baía Farta', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Benguela', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Bocoio', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Caimbambo', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Catumbela', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Chongorói', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Cubal', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Ganda', 'provincia_id' => 2]);
            Municipio::create(['name' => 'Lobito', 'provincia_id' => 2]);

            Provincia::create(['name' => 'Bié']);
            Municipio::create(['name' => 'Andulo', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Camacupa', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Catabola', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Chinguar', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Cunhinga', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Cuemba', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Cuito', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Nharea', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Chitembo', 'provincia_id' => 3]);
            Municipio::create(['name' => 'Ucuma', 'provincia_id' => 3]);

            Provincia::create(['name' => 'Cabinda']);
            Municipio::create(['name' => 'Belize', 'provincia_id' => 4]);
            Municipio::create(['name' => 'Buco Zau', 'provincia_id' => 4]);
            Municipio::create(['name' => 'Cabinda', 'provincia_id' => 4]);
            Municipio::create(['name' => 'Cacongo', 'provincia_id' => 4]);

            Provincia::create(['name' => 'Cuando Cubango']);
            Municipio::create(['name' => 'Calai', 'provincia_id' => 5]);
            Municipio::create(['name' => 'Cuangar', 'provincia_id' => 5]);
            Municipio::create(['name' => 'Cuchi', 'provincia_id' => 5]);
            Municipio::create(['name' => 'Cuito Cuanavale', 'provincia_id' => 5]);
            Municipio::create(['name' => 'Dirico', 'provincia_id' => 5]);
            Municipio::create(['name' => 'Mavinga', 'provincia_id' => 5]);
            Municipio::create(['name' => 'Menongue', 'provincia_id' => 5]);
            Municipio::create(['name' => 'Nancova', 'provincia_id' => 5]);
            Municipio::create(['name' => 'Rivungo', 'provincia_id' => 5]);

            Provincia::create(['name' => 'Cuanza Norte']);
            Municipio::create(['name' => 'Ambaca', 'provincia_id' => 6]);
            Municipio::create(['name' => 'Banga', 'provincia_id' => 6]);
            Municipio::create(['name' => 'Bolongongo', 'provincia_id' => 6]);
            Municipio::create(['name' => 'Cambambe', 'provincia_id' => 6]);
            Municipio::create(['name' => 'Cazengo', 'provincia_id' => 6]);
            Municipio::create(['name' => 'Golungo Alto', 'provincia_id' => 6]);
            Municipio::create(['name' => 'Lucala', 'provincia_id' => 6]);
            Municipio::create(['name' => 'Quiculungo', 'provincia_id' => 6]);
            Municipio::create(['name' => 'Samba Caju', 'provincia_id' => 6]);

            Provincia::create(['name' => 'Cuanza Sul']);
            Municipio::create(['name' => 'Amboim', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Cassongue', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Conda', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Ebo', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Libolo', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Mussende', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Porto Amboim', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Quibala', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Quilenda', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Seles', 'provincia_id' => 7]);
            Municipio::create(['name' => 'Sumbe', 'provincia_id' => 7]);

            Provincia::create(['name' => 'Cunene']);
            Municipio::create(['name' => 'Cahama', 'provincia_id' => 8]);
            Municipio::create(['name' => 'Cuanhama', 'provincia_id' => 8]);
            Municipio::create(['name' => 'Curoca', 'provincia_id' => 8]);
            Municipio::create(['name' => 'Cuvelai', 'provincia_id' => 8]);
            Municipio::create(['name' => 'Namacunde', 'provincia_id' => 8]);
            Municipio::create(['name' => 'Ombadja', 'provincia_id' => 8]);

            Provincia::create(['name' => 'Huambo']);
            Municipio::create(['name' => 'Bailundo', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Caála', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Ekunha', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Huambo', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Londuimbali', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Longonjo', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Mungo', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Tchicala Tcholohanga', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Tchindjenje', 'provincia_id' => 9]);
            Municipio::create(['name' => 'Ucuma', 'provincia_id' => 9]);

            Provincia::create(['name' => 'Huíla']);
            Municipio::create(['name' => 'Caconda', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Cacula', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Caluquembe', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Chiange', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Chibia', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Chicomba', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Chipindo', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Humpata', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Jamba', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Lubango', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Matala', 'provincia_id' => 10]);
            Municipio::create(['name' => 'Quilengues', 'provincia_id' => 10]);

            Provincia::create(['name' => 'Luanda']);
            Municipio::create(['name' => 'Belas', 'provincia_id' => 11]);
            Municipio::create(['name' => 'Cacuaco', 'provincia_id' => 11]);
            Municipio::create(['name' => 'Cazenga', 'provincia_id' => 11]);
            Municipio::create(['name' => 'Ícolo e Bengo', 'provincia_id' => 11]);
            Municipio::create(['name' => 'Luanda', 'provincia_id' => 11]);
            Municipio::create(['name' => 'Quiçama', 'provincia_id' => 11]);
            Municipio::create(['name' => 'Talatona', 'provincia_id' => 11]);
            Municipio::create(['name' => 'Viana', 'provincia_id' => 11]);
            Municipio::create(['name' => 'Vila de Cacuaco', 'provincia_id' => 11]);

            Provincia::create(['name' => 'Lunda Norte']);
            Municipio::create(['name' => 'Cambulo', 'provincia_id' => 12]);
            Municipio::create(['name' => 'Capenda-Camulemba', 'provincia_id' => 12]);
            Municipio::create(['name' => 'Caungula', 'provincia_id' => 12]);
            Municipio::create(['name' => 'Chitato', 'provincia_id' => 12]);
            Municipio::create(['name' => 'Cuango', 'provincia_id' => 12]);
            Municipio::create(['name' => 'Cuilo', 'provincia_id' => 12]);
            Municipio::create(['name' => 'Lóvua', 'provincia_id' => 12]);
            Municipio::create(['name' => 'Lubalo', 'provincia_id' => 12]);

            Provincia::create(['name' => 'Lunda Sul']);
            Municipio::create(['name' => 'Cacolo', 'provincia_id' => 13]);
            Municipio::create(['name' => 'Dala', 'provincia_id' => 13]);
            Municipio::create(['name' => 'Muconda', 'provincia_id' => 13]);
            Municipio::create(['name' => 'Saurimo', 'provincia_id' => 13]);

            Provincia::create(['name' => 'Malanje']);
            Municipio::create(['name' => 'Cacuso', 'provincia_id' => 14]);
            Municipio::create(['name' => 'Calandula', 'provincia_id' => 14]);
            Municipio::create(['name' => 'Cambundi-Catembo', 'provincia_id' => 14]);
            Municipio::create(['name' => 'Cangandala', 'provincia_id' => 14]);
            Municipio::create(['name' => 'Malanje', 'provincia_id' => 14]);
            Municipio::create(['name' => 'Marimba', 'provincia_id' => 14]);
            Municipio::create(['name' => 'Massango', 'provincia_id' => 14]);
            Municipio::create(['name' => 'Mucari', 'provincia_id' => 14]);
            Municipio::create(['name' => 'Quela', 'provincia_id' => 14]);

            Provincia::create(['name' => 'Moxico']);
            Municipio::create(['name' => 'Alto Zambeze', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Bundas', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Camanongue', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Cameia', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Léua', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Luacano', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Luchazes', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Luena', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Lumeje', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Moxico', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Léua', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Luchazes', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Luena', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Lumeje', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Moxico', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Muié', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Namacunde', 'provincia_id' => 15]);
            Municipio::create(['name' => 'Ombadja', 'provincia_id' => 15]);

            Provincia::create(['name' => 'Namibe']);
            Municipio::create(['name' => 'Bibala', 'provincia_id' => 16]);
            Municipio::create(['name' => 'Camucuio', 'provincia_id' => 16]);
            Municipio::create(['name' => 'Moçâmedes', 'provincia_id' => 16]);
            Municipio::create(['name' => 'Tômbua', 'provincia_id' => 16]);

            Provincia::create(['name' => 'Uíge']);
            Municipio::create(['name' => 'Alto Cauale', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Ambuila', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Bembe', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Buengas', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Bungo', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Damba', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Milunga', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Negage', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Puri', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Quitexe', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Sanza Pombo', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Songo', 'provincia_id' => 17]);
            Municipio::create(['name' => 'Uíge', 'provincia_id' => 17]);

            Provincia::create(['name' => 'Zaire']);
            Municipio::create(['name' => 'Cuimba', 'provincia_id' => 18]);
            Municipio::create(['name' => "M'banza Kongo", 'provincia_id' => 18]);
            Municipio::create(['name' => 'Noqui', 'provincia_id' => 18]);
            Municipio::create(['name' => 'Nzeto', 'provincia_id' => 18]);
            Municipio::create(['name' => 'Soyo', 'provincia_id' => 18]);
            Municipio::create(['name' => 'Tomboco', 'provincia_id' => 18]);
        }
    }
}
