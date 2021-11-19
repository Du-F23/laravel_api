<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'producto' => 'Agua 1 Lt'
                ,'existencias' => 15 
                ,'precio'=> 15
                ,'fotografia' => 'agua.jpg'
                ,'descripcion' => 'Agua baja en sodio'
                ,'estatus' => 'Activo'
                ,'iva' => 16
                ,'created_at' => '2021-11-18 18:25'
                ,'updated_at' =>  '2021-11-18 18:25'
            ],

            [
                'producto' => 'Leche deslactosada 1 Lt'
                ,'existencias' => 15 
                ,'precio'=> 15
                ,'fotografia' => 'Leche_deslactosada.jpg'
                ,'descripcion' => 'Leche deslactosada 100% origen animal'
                ,'estatus' => 'Activo'
                ,'iva' => 16
                ,'created_at' => '2021-11-18 18:25'
                ,'updated_at' =>  '2021-11-18 18:25'
            ],

            [
                'producto' => 'Refresco Coca Cola 600 ml'
                ,'existencias' => 15 
                ,'precio'=> 15
                ,'fotografia' => 'Refresco_Coca_Cola.jpg'
                ,'descripcion' => 'Refresco Coca Cola'
                ,'estatus' => 'Activo'
                ,'iva' => 16
                ,'created_at' => '2021-11-18 18:25'
                ,'updated_at' =>  '2021-11-18 18:25'
            ]
        ]);
    }
}
