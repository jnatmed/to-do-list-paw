<!DOCTYPE html>
<html>
<head>
    <title><?= $dueño ?> To-Do List</title>
</head>
<body>
    <header>
        <h1><?= $nombre_lista ?></h1>
        <nav>
            <ul>
                <li>
                    <a href="/new_task">Crear Nueva Tarea</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="mensajes">
            <?php foreach ($mensajes_usuario as $mensaje) : ?>
                <p><?= $mensaje ?></p>
            <?php endforeach ?>
        </section>
        <section id="pendientes">
            <h1>Tareas Pendientes</h1>
            <ul>
                <?php foreach ($todo_list->pendientes() as $tarea) : ?>
                    <li><?= $tarea->descripcion ?></li>
                <?php endforeach ?>
            </ul>
        </section>
        <section id="finalizadas">
            <h1>Tareas Finalizadas</h1>
            <ul>
                <?php foreach ($todo_list->finalizadas() as $tarea) : ?>
                    <li><?= $tarea->descripcion ?></li>
                <?php endforeach ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>Tareas finalizadas: <?= count($todo_list->finalizadas()) ?></p>
        <p>Tareas pendientes: <?= count($todo_list->pendientes()) ?></p>
    </footer>
</body>
</html>
