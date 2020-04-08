<?php

namespace App\core;

class Config
{
    public $data = [];

    public function __construct()
    {
        $this->data['dueño'] = 'Juan';
        $this->data['nombre_lista'] = "Lista de Tareas: {$this->data['dueño']}";
    }
}

?>