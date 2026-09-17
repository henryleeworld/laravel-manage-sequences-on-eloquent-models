<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TaskList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['id'];

    /**
     * Get the tasks for the task list.
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
