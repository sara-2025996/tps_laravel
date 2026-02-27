<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Annonces')->insert([
            [
                'titre'=>'test1',
                'description'=>'azertyui',
                'type'=>'maison',
                'ville'=>'casa',
                'superfice'=>120,
                'etat'=>true,
                'prix'=>200000,
            ],
             [
                'titre'=>'test2',
                'description'=>'azertyui',
                'type'=>'ville',
                'ville'=>'casa',
                'superfice'=>200,
                'etat'=>false,
                'prix'=>760000,
            ],
             [
                'titre'=>'test3',
                'description'=>'azertyui',
                'type'=>'terrain',
                'ville'=>'casa',
                'superfice'=>200,
                'etat'=>true,
                'prix'=>240000,
            ],
             [
                'titre'=>'test4',
                'description'=>'azertyui',
                'type'=>'magasin',
                'ville'=>'casa',
                'superfice'=>200,
                'etat'=>false,
                'prix'=>560000,
            ],
            
        ]);
    }
}
