<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = [
            [
                'menu' => 'Nasi Goreng',
                'kategori' => 'Makanan',
            ],
            [
                'menu' => 'Mie Freno',
                'kategori' => 'Makanan',
            ],
            [
                'menu' => 'Nasi Teriyaki',
                'kategori' => 'Makanan',
            ],
            [
                'menu' => 'Nasi Ayam Katsu',
                'kategori' => 'Makanan',
            ],
            [
                'menu' => 'Nasi Goreng Mawut',
                'kategori' => 'Makanan'
            ],
            [
                'menu' => 'Teh Hijau',
                'kategori' => 'Minuman'
            ],
            [   "menu"=>"Teh Lemon",
                "kategori"=>"Minuman"
            ],
            [   "menu"=>"Teh",
                "kategori"=>"Minuman"
            ],
            [   "menu"=>"Kopi Hitam",
                "kategori"=>"Minuman"
            ],
            [   "menu"=>"Kopi Susu",
                "kategori"=>"Minuman"
            ]
        ];

        foreach ($menu as $key => $value) {
            Menu::create($value);
        }
    }
}
