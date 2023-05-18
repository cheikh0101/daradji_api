<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bayite extends Model
{
    use HasFactory;

    /**
     * Get the khassida that owns the Bayite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function khassida(): BelongsTo
    {
        return $this->belongsTo(Khassida::class);
    }
}
