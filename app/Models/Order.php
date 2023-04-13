<?php

namespace App\Models;

use App\Models\User;
use App\Models\Order;
use App\Models\Ouvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function ouvrier(): BelongsTo
    {
        return $this->belongsTo(Ouvrier::class);
    }
}
