<?php

namespace App\Models;

use App\Models\Ouvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FileOuvrier extends Model
{
    use HasFactory;

    protected $fillable = [
        'cin_url',
        'other_url',
        'ouvrier_id',
    ];

    public function ouvrier()
    {
        return $this->hasOne(Ouvrier::class);
    }

}
