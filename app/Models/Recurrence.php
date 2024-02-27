<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recurrence extends Model
{
    use HasFactory;

    protected $fillable = [
        'frequency',
        'iteration_duration_type',
        'iteration_duration_value',
        'specific_days'
    ];

    /**
     * Get the task that owns the Recurrence
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}
