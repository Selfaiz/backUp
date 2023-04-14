<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categorie;
use App\Models\DemandeImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'Ville_adresse',
        'address',
        'categorie_id',
        'Type_Travail',
        'info',
        'image_url',
        'image_url2',
        'is_done',
        'user_id',
    ];

    public function demandeImages(): HasMany
    {
        return $this->hasMany(DemandeImage::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class );
    }
    
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Categorie::class );
    }
    
}
