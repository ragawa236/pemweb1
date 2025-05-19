<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(PageConfig::count()==0){
            PageConfig::create([
                'title' => 'Info Beasiswa Terbaru',
                'detail' => 'Kami menyediakan kumpulan info beasiswa terbaru untuk seluruh pelajar/mahasiswa Indonesia. Tersedia beasiswa dalam dan luar negri.',
                'image' => '',
            ]);
        } 
    }
}
