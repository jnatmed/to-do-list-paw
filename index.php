<?php

include 'models/ToDoListModel.php';
include 'models/TaskModel.php';

use \App\models\ToDoList;

$url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$dueño = "Tomas";
$nombre_lista = "Lista de Tareas: $dueño";
$todo_list = new ToDoList;
$todo_list->create_task("Carniceria: Asado");
$todo_list->create_task("Verduleria: Lechuga, Tomate, Huevo");
$todo_list->create_task("Supermercado: Desodorante, Pagar Impuestos");
$todo_list->create_task("Farmacia: Remedios", true);

$mensajes_usuario = [];

if ($url_path == '/new_task') {
    include "new.task.view.php";
} else if ($url_path == '/save_task') {
    $descripcion = $_POST['descripcion'];
    $finalizada = $_POST['finalizada'] == "si" ;
    $task = $todo_list->create_task($descripcion, $finalizada);
    $mensajes_usuario[] = "La tarea '{$task->descripcion}' se creo con exito";
    $mensajes_usuario[] = "Si esto tuviera persistencia, aca hay que hacer el save";
    include "index.view.php";
} else {
    include "index.view.php";
}
?>