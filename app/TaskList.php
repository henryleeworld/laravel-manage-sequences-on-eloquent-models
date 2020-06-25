<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id'];

    /**
     * Get the tasks for the task list.
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
