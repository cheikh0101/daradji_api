<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Khassida extends Model
{
    use HasFactory;

    protected $appends = ['numberOfBayite'];

    /**
     * Get all of the bayites for the Xassida
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bayites(): HasMany
    {
        return $this->hasMany(Bayite::class);
    }

    public function getnumberOfBayiteAttribute()
    {
        $numberOfBayite = Bayite::where('khassida_id', $this->id)->count();
        return $numberOfBayite;
    }
}
