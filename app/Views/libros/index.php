<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Libreria Bookie">
    <meta name="keywords" content="Libros, Librería, Agendas">
    <meta name="author" content="Daniela Cardozo">
    <title>Librería Bookie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .navbar-custom {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar-nav {
            flex-direction: row;
        }

        .card-shadow {
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white navbar-custom">
            <div class="navbar-brand"> <img src="img/bookie.png" alt="Logo" style="height: 210px;"> </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(''); ?>">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Productos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a> </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container text-center">
        <h2>Libros</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
            <?php foreach($libros as $libro) : ?>
            <div class="col">
                <div class="card h-100 card-shadow">
                    <!-- <img src="<?= $libro['imagen'] ?>" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?= $libro['titulo'] ?></h5>
                        <p class="card-text">$<?= $libro['precio'] ?></p>
                    </div>
                    <button type="button" class="btn btn-outline-secondary"><a class="text-decoration-none text-dark" href="<?= base_url(('libros/ver/' . $libro['id'])) ?>">Ver más...</a></button>
                </div>
            </div>
            
            <!-- <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <?php endforeach; ?>
    </div>
</body>

</html>