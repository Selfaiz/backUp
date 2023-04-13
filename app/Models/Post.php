<?php

namespace App\Models;

use App\Models\Ouvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function ouvreir(): BelongsTo
        {
            return $this->belongsTo(Ouvrier::class);
        }
}
