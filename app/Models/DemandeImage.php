<?php

namespace App\Models;

use App\Models\Demande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemandeImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_url',
    ];

    public function demande(): BelongsTo
        {
            return $this->belongsTo(Demande::class);
        }
}
