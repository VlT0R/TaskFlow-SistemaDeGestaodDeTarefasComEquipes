<?php

namespace App\Models;

use App\StatusTask;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'deadline',
    ];

    protected $casts = [
        'id' => 'integer',
        'status' => StatusTask::class,
        'deadline' => 'datetime',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

}
