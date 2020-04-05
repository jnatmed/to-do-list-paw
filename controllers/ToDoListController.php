<?php

namespace App\controllers;

use App\models\ToDoList;

class ToDoListController
{
    public function index()
    {
        $dueño = "Juan";
        $nombre_lista = "Lista de Tareas: $dueño";
        $mensajes_usuario = [];

        $todo_list = new ToDoList;
        $todo_list->create_task("Carniceria: Asado");
        $todo_list->create_task("Verduleria: Lechuga, Tomate, Huevo");
        $todo_list->create_task("Supermercado: Desodorante, Pagar Impuestos");
        $todo_list->create_task("Farmacia: Remedios", true);

        $descripcion = $_POST['descripcion'];
        $finalizada = $_POST['finalizada'] == "si";
        $task = $todo_list->create_task($descripcion, $finalizada);
        $mensajes_usuario[] = "La tarea '{$task->descripcion}' se creo con exito";
        $mensajes_usuario[] = "Si esto tuviera persistencia, aca hay que hacer el save";
        include "index.view.php";        
    }
}

?>