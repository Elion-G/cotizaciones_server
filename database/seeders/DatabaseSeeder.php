<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $array = array('La Moneda' => 'https://lamoneda.click/', 'Cambios Chaco' => 'https://www.cambioschaco.com.py/', 'Maxi Cambios' => 'https://www.maxicambios.com.py/', 'Bonanza Cambios' => 'https://www.bonanzacambios.com.py/');
        foreach ( $array as $first => $second){
            DB::table('cot_exchange_houses')->insert([
                'name' => $first,
                'address' => $second,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

        $array2 = array('Dolar americano' => 'USD', 'Real' => 'BRL', 'Peso argentino' => 'ARS', 'Euro' => 'EUR', 'Dolar x Real' => 'DxR', 'Dolar x Peso' => 'DxP', 'Dolar x Euro' => 'DxE');
        foreach ( $array2 as $first => $second){
            DB::table('cot_currencies')->insert([
                'name' => $first,
                'iso' => $second,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

    }
}
