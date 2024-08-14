<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subtheme;
use App\Models\Theme;

class SubthemeSeeder extends Seeder
{
    public function run()
    {
        $theme1 = Theme::where('name', 'Тема 1')->first();
        $theme2 = Theme::where('name', 'Тема 2')->first();

        if ($theme1) {
            Subtheme::create(['theme_id' => $theme1->id, 'name' => 'Подтема 1.1']);
            Subtheme::create(['theme_id' => $theme1->id, 'name' => 'Подтема 1.2']);
        }

        if ($theme2) {
            Subtheme::create(['theme_id' => $theme2->id, 'name' => 'Подтема 2.1']);
            Subtheme::create(['theme_id' => $theme2->id, 'name' => 'Подтема 2.2']);
            Subtheme::create(['theme_id' => $theme2->id, 'name' => 'Подтема 2.3']);
        }
    }
}
