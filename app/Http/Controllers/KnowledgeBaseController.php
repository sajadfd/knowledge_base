<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Subtheme;
use App\Models\Content;

class KnowledgeBaseController extends Controller
{
    public function index()
    {
        $themes = Theme::with('subthemes')->get();

        // Ensure there are themes in the database
        if ($themes->isEmpty()) {
            return view('knowledgebase.index', [
                'themes' => [],
                'selectedTheme' => null,
                'selectedSubtheme' => null,
                'content' => null,
            ]);
        }

        $selectedTheme = $themes->first();

        // Ensure there are subthemes for the selected theme
        if ($selectedTheme->subthemes->isEmpty()) {
            return view('knowledgebase.index', [
                'themes' => $themes,
                'selectedTheme' => $selectedTheme,
                'selectedSubtheme' => null,
                'content' => null,
            ]);
        }

        $selectedSubtheme = $selectedTheme->subthemes->first();
        $content = Content::where('subtheme_id', $selectedSubtheme->id)->first();

        return view('knowledgebase.index', compact('themes', 'selectedTheme', 'selectedSubtheme', 'content'));
    }


    public function showSubtheme($themeId, $subthemeId)
    {
        $themes = Theme::with('subthemes')->get();
        $selectedTheme = Theme::findOrFail($themeId);
        $selectedSubtheme = Subtheme::findOrFail($subthemeId);
        $content = Content::where('subtheme_id', $subthemeId)->first();

        return view('knowledgebase.index', compact('themes', 'selectedTheme', 'selectedSubtheme', 'content'));
    }
}
