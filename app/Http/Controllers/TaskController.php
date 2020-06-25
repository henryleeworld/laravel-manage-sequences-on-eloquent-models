<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskList;

class TaskController extends Controller
{
    public function index()
    {
        $taskListId = 1;
        TaskList::updateOrCreate([
            'id' => $taskListId,
        ]);
        for ($x = 20; $x >= 1; $x--) {
            Task::updateOrCreate([
                'order' => $x,
                'task_lists_id' => $taskListId,
            ]);
        }
        $tasks = Task::sequenced()->get();
        foreach ($tasks as $key => $value) {
            echo '順序：' . $value['order'] . PHP_EOL;
        }
    }
}
