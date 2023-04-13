<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Categorie;
use App\Models\FileOuvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
    
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
