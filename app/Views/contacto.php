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

        .contacto_box {
            width: 80%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(40, 19, 155, 0.041));
            margin: 50px;
            padding: 70px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
            color: #3a3636;
        }

        .contacto_box label {
            margin: 0.8rem;
        }

        .form-input {
            border: 1px solid #3a3636;
            border-radius: 4px;
            padding: 0.6rem;
        }

        .submit-button {
            border-radius: 4px;
            padding: 1rem;
            margin-top: 1rem;
            border: none;
        }

        .submit-button:hover {
            background-color: rgb(218, 196, 251);
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
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('libros'); ?>">Productos</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#">Contacto</a> </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container">
        <div class="contacto_box">
            <form class="d-flex flex-column justify-content-center" action="enviar_consulta.php" method="POST">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-input">

                <label for="nombre">Apellido</label>
                <input type="text" name="apellido" class="form-input">

                <label for="email">Correo electronico</label>
                <input type="text" name="email" class="form-input">

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="" rows="4" class="form-input"></textarea>
                <input type="submit" value="Enviar consulta a Bookie" class="submit-button">
            </form>
        </div>
        <!-- <?php
                if (isset($_GET['ok'])) {
                    echo "<h3> Su consulta fue enviada con éxito </h3>";
                }
                ?> -->
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>