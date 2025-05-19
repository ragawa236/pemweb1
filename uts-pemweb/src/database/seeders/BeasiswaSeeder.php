<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Beasiswa::count()==0){
            Beasiswa::create([
                'name' => 'Pelajar Maju',
                'description' => 'Beasiswa ini terbuka bagi seluruh pelajar di Indonesia mulai dari jenjang SD hingga SMA dan sederajat.',
                'image' => ' ',
            ]);
            Beasiswa::create([
                'name' => 'Mahasiswa Nusantara',
                'description' => 'Terbuka untuk seluruh mahasiswa dari jurusan apapun dan kampus mana pun yang tersebut di seluruh Nusantara.',
                'image' => ' ',
            ]);     
        } 
    }
}
