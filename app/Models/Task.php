<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * Massive attributes assignable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
    ];



    /**
     * Bool property for completed task. If true, its hidden from actual display and shown in completed view.
     *
     * @var boolean
     */
    protected bool $is_completed = false;


    public function frenquency() {
        return $this->hasOne(Recurrence::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
