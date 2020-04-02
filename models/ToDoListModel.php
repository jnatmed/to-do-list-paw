<?php

namespace App\models;

use App\models\Task;

class ToDoList
{
    public $tasks = [];

    public function add_task(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function create_task($descripcion, $finalizada = false)
    {
        $task = new Task($descripcion, $finalizada);
        $this->add_task($task);
        return $task;
    }

    public function pendientes()
    {
        return array_filter($this->tasks, function($task) {
            return !$task->finalizada;
        });
    }

    public function finalizadas()
    {
        return array_filter($this->tasks, function($task) {
            return $task->finalizada;
        });
    }
}

?>