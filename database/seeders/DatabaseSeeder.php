<?php

namespace Database\Seeders;
use App\Models\Etudiant;
use App\Models\Model;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        Etudiant::factory(30)->create();
        //$this->call(ClassesTableSeeder::class);//  lorsque je vais executer les seeder il va généer les données au niveau de notre base il vas executer la class databaseSeeder
    }
}
