<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;


class Project extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'status',
        'team_id',
    ];

    protected $casts = [
        'status' => Status::class,
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(
            related: Team::class,
            foreignKey: 'team_id',
        );
    }
}
