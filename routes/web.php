<?php

use App\Http\Controllers\KnowledgeBaseController;
use Illuminate\Support\Facades\Route;

 
Route::get('/', [KnowledgeBaseController::class, 'index'])->name('knowledgebase.index');
Route::get('/theme/{themeId}/subtheme/{subthemeId}', [KnowledgeBaseController::class, 'showSubtheme'])->name('knowledgebase.show');
