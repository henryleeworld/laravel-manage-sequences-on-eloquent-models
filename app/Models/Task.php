<?php

namespace App\Models;

use App\Models\TaskList;
use Gurgentil\LaravelEloquentSequencer\Traits\Sequenceable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use Sequenceable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['order', 'task_lists_id'];
    
    protected static $sequenceableKeys = [
        'task_lists_id',
    ];

    public function taskListsId()
    {
        return $this->belongsTo(TaskList::class);
    }
}
