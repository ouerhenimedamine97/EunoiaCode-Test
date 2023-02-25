<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserSubject extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'subject_id',
    ];
}
