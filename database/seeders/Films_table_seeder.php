<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Films_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            'titre'=>'film1',
            'pays'=>'franc',
            'annee'=>2002,
            'duree'=>'1:30',
        ]);
    }
}
