<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counties = [
            'Baranya',
            'Bács-Kiskun',
            'Békés',
            'Borsod-Abaúj-Zemplén',
            'Csongrád',
            'Fejér',
            'Győr-Moson-Sopron',
            'Hajdú-Bihar',
            'Heves',
            'Jász-Nagykun-Szolnok',
            'Komárom-Esztergom',
            'Nógrád',
            'Pest',
            'Somogy',
            'Szabolcs-Szatmár-Bereg',
            'Tolna',
            'Vas',
            'Veszprém',
            'Zala'
        ];

        foreach ($counties as $county) {
            DB::table('counties')->insert([
                'name' => $county,
            ]);
        }
    }
}
