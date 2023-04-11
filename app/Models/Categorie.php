<?php

namespace App\Models;

use App\Models\Demande;
use App\Models\Ouvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory;
    protected $guard=[
        'id'
    ];

    public function ouviers(): HasMany
    {
        return $this->hasMany(Ouvrier::class);
    }

    public function demandes(): HasMany
    {
        return $this->hasMany(Demande::class);
    }
}
