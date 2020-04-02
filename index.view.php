<!DOCTYPE html>
<html>
    <head>
        <title><?php $dueño?>To-Do List</title>
    </head>
    <body>
        <header>
            <h1><?= $nombre_lista ?></h1>
        </header>
        <main>
            <section id="pendientes">
                <h1>Tareas Pendientes</h1>
                <ul>
                    <?php foreach ($tareas_pendientes as $tarea) : ?>
                        <li><?= $tarea ?></li>
                    <?php endforeach ?>
                </ul>
            </section>
            <section id="finalizadas">
                <h1>Tareas Finalizadas</h1>
                <ul>
                    <?php foreach ($tareas_finalizadas as $tarea) : ?>
                        <li><?= $tarea ?></li>
                    <?php endforeach ?>
                </ul>
            </section>
        </main>
        <footer>
            <p>Tareas finalizadas: <?= count($tareas_finalizadas) ?></p>
            <p>Tareas pendientes: <?= count($tareas_pendientes) ?></p>
        </footer>
    </body>
</html>
