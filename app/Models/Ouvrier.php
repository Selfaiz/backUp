<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\FileOuvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ouvrier extends Model
{
    use HasFactory;

    protected $guard = [
        'id'
    ];

    public function fileOuvrier(): HasOne
    {
        return $this->hasOne(FileOuvrier::class);
    }

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
}
