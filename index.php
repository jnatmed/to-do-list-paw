<?php

include 'models/ToDoListModel.php';
include 'models/TaskModel.php';

use \App\models\ToDoList;

$dueño = "Juan";
$nombre_lista = "Lista de Tareas: $dueño";

$todo_list = new ToDoList;
$todo_list->create_task("Carniceria: Asado");
$todo_list->create_task("Verduleria: Lechuga, Tomate, Huevo");
$todo_list->create_task("Supermercado: Desodorante, Pagar Impuestos");
$todo_list->create_task("Farmacia: Remedios", true);

include "index.view.php";
?>