<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Channel extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'project_id',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(
            related: Project::class,
            foreignKey: 'project_id',
        );
    }

    public function events(): HasMany
    {
        return $this->hasMany(
            related: Event::class,
            foreignKey: 'channel_id'
        );
    }
}
