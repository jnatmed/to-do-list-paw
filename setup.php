<?php

include 'core/Router.php';
include 'models/ToDoListModel.php';
include 'models/TaskModel.php';
include 'controllers/ToDoListController.php';
include 'controllers/TaskController.php';

use App\core\Router;

$router = new Router;

$router->define([
    'GET /' => 'ToDoListController@index',
    'GET /new_task' => 'TaskController@new',
    'POST /save_task' => 'TaskController@save',
])

?>