<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    public function run()
    {
        Theme::create(['name' => 'Тема 1']);
        Theme::create(['name' => 'Тема 2']);
    }
}
