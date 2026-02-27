<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StagiaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('Stagiaires')->insert([
              [
          'nom' => 'test1',
          'genre' => 'f',
          'note' => 12
          ] ,
            [
          'nom' => 'test2',
          'genre' => 'm',
          'note' => 18
          ] ,
            [
          'nom' => 'test3',
          'genre' => 'm',
          'note' => 15.5
          ] ,
            [
          'nom' => 'test4',
          'genre' => 'f',
          'note' => 17
          ] ,
            [
          'nom' => 'test5',
          'genre' => 'f',
          'note' => 13
          ] 
          ]
    );
    }
}
