<?php
// Incluir el archivo de conexión a la base de datos
include 'db.php'; 

// Consultar la tabla 'libros' para obtener los libros
$stmt_libros = $pdo->query('SELECT * FROM libros');
$libros = $stmt_libros->fetchAll();

// Consultar la tabla 'autores' para obtener los autores
$stmt_autores = $pdo->query('SELECT * FROM autores');
$autores = $stmt_autores->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <!-- Agregar Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Agregar el CSS personalizado -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Biblioteca Online</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#libros">Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#autores">Autores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Bienvenido a la Biblioteca Online</h1>

        <!-- Sección de Libros -->
        <section id="libros">
            <h2 class="mb-4">Libros Disponibles</h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($libros as $libro): ?>
                            <tr>
                                <td><?= htmlspecialchars($libro['id_libro']) ?></td>
                                <td><?= htmlspecialchars($libro['titulo']) ?></td>
                                <td><?= htmlspecialchars($libro['precio']) ?> $</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Sección de Autores -->
        <section id="autores" class="mt-5">
            <h2 class="mb-4">Autores Disponibles</h2>
            <ul class="list-group">
                <?php foreach ($autores as $autor): ?>
                    <li class="list-group-item"><?= htmlspecialchars($autor['nombre']) ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <!-- Sección de Contacto -->
        <section id="contacto" class="mt-5">
            <h2 class="mb-4">Formulario de Contacto</h2>
            <form action="contacto.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Tu Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Tu Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="mb-3">
                    <label for="asunto" class="form-label">Asunto</label>
                    <input type="text" class="form-control" id="asunto" name="asunto" required>
                </div>
                <div class="mb-3">
                    <label for="comentario" class="form-label">Comentario</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>

    <!-- Agregar Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Agregar el JavaScript personalizado -->
    <script src="js/scripts.js"></script>
</body>
</html>
