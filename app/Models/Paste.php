<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paste extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'content',
    ];

    protected $appends = [
        'url',
    ];

    /**
     * Get the URL of the paste.
     */
    public function getUrlAttribute(): string
    {
        return route('pastes.show', $this->id, false);
    }
}
