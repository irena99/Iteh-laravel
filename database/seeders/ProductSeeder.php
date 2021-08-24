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
            'gallery'=>'https://thumbs.dreamstime.com/z/three-act-tragedy-book-agatha-christie-facsimile-first-edition-table-london-england-uk-january-three-act-tragedy-206318090.jpg'
        ],
        [
        'name'=>'Mafin jagoda',
        'price'=>'100',
        'description'=>'Mafin sa punjenjem od jagode',
        'category'=>'Mafin',
        'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fcelebratingsweets.com%2Fstrawberry-muffins%2F&psig=AOvVaw1EfZEYBoemYKNWX4-vUBtv&ust=1629661195946000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMiOy5rvwvICFQAAAAAdAAAAABAD'
        ],
        [
        'name'=>'Mafin sa belom čokoladom',
        'price'=>'100',
        'description'=>'Mafin sa punjenjem od bele čokolade',
        'category'=>'Mafin',
        'gallery'=>'https://www.pamperedchef.com/iceberg/com/recipe/100348-lg.jpg'
        ]
        
        ]);
    }
}
