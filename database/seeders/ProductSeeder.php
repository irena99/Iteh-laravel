<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Mafin čokolada',
            'price'=>'100',
            'description'=>'Mafin sa čokoladnim punjenjem',
            'category'=>'Mafin',
            'gallery'=>'https://thebusybaker.ca/wp-content/uploads/2019/09/best-ever-from-scratch-chocolate-cupcakes-fb-ig-3-500x375.jpg'
        ],
        [
        'name'=>'Mafin jagoda',
        'price'=>'100',
        'description'=>'Mafin sa punjenjem od jagode',
        'category'=>'Mafin',
        'gallery'=>'https://www.lifeloveandsugar.com/wp-content/uploads/2021/03/Fresh-Strawberry-Cupcakes3.jpg'
        ],
        [
        'name'=>'Mafin sa belom čokoladom',
        'price'=>'100',
        'description'=>'Mafin sa punjenjem od bele čokolade',
        'category'=>'Mafin',
        'gallery'=>'https://www.chelsea.co.nz/files/cache/feda43c812d98849a952356eaa43ea71_f2361.jpg'
        ]
        
        ]);
    }
}
