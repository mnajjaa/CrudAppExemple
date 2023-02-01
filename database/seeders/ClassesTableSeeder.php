<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('classes')->insert([
    ["libelle"=>"6éme"],
    ["libelle"=>"5éme"],
    ["libelle"=>"4éme"],
    ["libelle"=>"3éme"],
    ["libelle"=>"Seconde"],
    ["libelle"=>"Première"],
    ["libelle"=>"Terminale"],
]);  //nous permet d'avoir accès aux tables qui se trouvent dans notre base de données dont la cnx est deja etablie mil ficher .envi
}
}

