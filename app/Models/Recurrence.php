<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recurrence extends Model
{
    use HasFactory;


    /**
     * Explain the attributes
     *
     * frequency = Daily/Weekly/Monthly/Yearly
     *
     * iteration_duration_type = (START DATE FOR THE ITERATION)
     *  This means if we want every Monday, this is the start date for the iteration
     *
     * iteration_duration_value = End_Date/Number for iterations
     *  And with this we check the value, if is a date, the calculations go from day to day; but if its a number
     *  we calculate the days.
     *
     * specific_days = 'Monday', '5 of March'
     *  For specific days as 5 of March every year.
     *
     */
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
