<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['subtheme_id', 'text'];

    public function subtheme()
    {
        return $this->belongsTo(Subtheme::class);
    }
}
