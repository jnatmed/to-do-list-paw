<?php

namespace App\controllers;

use App\core\Controller;
use App\models\ToDoList;

class ToDoListController extends Controller
{
    public function index()
    {

        $todo_list = new ToDoList;
        $todo_list->create_task("Carniceria: Asado");
        $todo_list->create_task("Verduleria: Lechuga, Tomate, Huevo");
        $todo_list->create_task("Supermercado: Desodorante, Pagar Impuestos");
        $todo_list->create_task("Farmacia: Remedios", true);

        $descripcion = $_POST['descripcion'];
        $finalizada = $_POST['finalizada'] == "si";
        $task = $todo_list->create_task($descripcion, $finalizada);
        include "index.view.php";        
    }
}

?>