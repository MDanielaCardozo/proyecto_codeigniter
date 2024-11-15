<style>
    @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;300;400;500;600&display=swap');
    * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Kanit';
    font-weight: 500;
    font-size: 1.5rem;
    }

    h2 {
        margin-top: 2rem;
        margin-left: 3rem;
        text-align: start;
    }

    .contenedor {
        display: block;
        justify-content: center;
        margin: 5rem;
    }

    .box{
        width: 40rem;
        margin: 2rem;
        padding: 2rem;
        border: solid 1px cornflowerblue;
    }
</style>

<div>
    <h2>Libros Detalles</h2>
    <div class="contenedor">
    <div class="box">
        <h3>Titulo: <?= $libro['titulo'] ?></h3>
        <p>Genero: <?= $libro['genero'] ?></p>
        <p>Precio: $<?= $libro['precio'] ?></p>

    </div>
    </div>
</div>