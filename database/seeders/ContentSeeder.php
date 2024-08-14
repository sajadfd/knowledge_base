<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content;
use App\Models\Subtheme;

class ContentSeeder extends Seeder
{
    public function run()
    {
        $subtheme1_1 = Subtheme::where('name', 'Подтема 1.1')->first();
        $subtheme1_2 = Subtheme::where('name', 'Подтема 1.2')->first();
        $subtheme2_1 = Subtheme::where('name', 'Подтема 2.1')->first();
        $subtheme2_2 = Subtheme::where('name', 'Подтема 2.2')->first();
        $subtheme2_3 = Subtheme::where('name', 'Подтема 2.3')->first();

        if ($subtheme1_1) {
            Content::create(['subtheme_id' => $subtheme1_1->id, 'text' => 'Некий текст, привязанный к Подтеме 1.1']);
        }

        if ($subtheme1_2) {
            Content::create(['subtheme_id' => $subtheme1_2->id, 'text' => 'Некий текст, привязанный к Подтеме 1.2']);
        }

        if ($subtheme2_1) {
            Content::create(['subtheme_id' => $subtheme2_1->id, 'text' => 'Некий текст, привязанный к Подтеме 2.1']);
        }

        if ($subtheme2_2) {
            Content::create(['subtheme_id' => $subtheme2_2->id, 'text' => 'Некий текст, привязанный к Подтеме 2.2']);
        }
        if ($subtheme2_3) {
            Content::create(['subtheme_id' => $subtheme2_3->id, 'text' => 'Некий текст, привязанный к Подтеме 2.3']);
        }
    }
}
