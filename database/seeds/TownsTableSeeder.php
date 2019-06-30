<?php

use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vocounty_id
     */
    public function run()
    {
        $towns = [
            ['name' => 'Kecskemét', 'county_id' => '1'],
            ['name' => 'Pécs', 'county_id' => '2'],
            ['name' => 'Békéscsaba', 'county_id' => '3'],
            ['name' => 'Miskolc', 'county_id' => '4'],
            ['name' => 'Szeged', 'county_id' => '5'],
            ['name' => 'Székesfehérvár', 'county_id' => '6'],
            ['name' => 'Győr', 'county_id' => '7'],
            ['name' => 'Debrecen', 'county_id' => '8'],
            ['name' => 'Eger', 'county_id' => '9'],
            ['name' => 'Szolnok', 'county_id' => '10'],
            ['name' => 'Tatabánya', 'county_id' => '11'],
            ['name' => 'Salgótarján', 'county_id' => '12'],
            ['name' => 'Budapest', 'county_id' => '13'],
            ['name' => 'Kaposvár', 'county_id' => '14'],
            ['name' => 'Nyregyháza', 'county_id' => '15'],
            ['name' => 'Szekszárd', 'county_id' => '16'],
            ['name' => 'Szombathely', 'county_id' => '17'],
            ['name' => 'Veszprém', 'county_id' => '18'],
            ['name' => 'Zalaegerszeg', 'county_id' => '19'],
        ];

        foreach ($towns as $town) {
            DB::table('towns')->insert([
                $town
            ]);
        }
    }
}
