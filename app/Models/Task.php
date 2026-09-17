<?php

namespace App\Models;

use App\Models\TaskList;
use Gurgentil\LaravelEloquentSequencer\Traits\Sequenceable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use Sequenceable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['order', 'task_lists_id'];
    
    protected static $sequenceableKeys = [
        'task_lists_id',
    ];

    /**
     * Get the task lists id that owns the task.
     */
    public function taskListsId(): BelongsTo
    {
        return $this->belongsTo(TaskList::class);
    }
}
