<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Metodos</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="card mt-5">
            <div class="card-header">
                Formulario
            </div>
            <div class="card-body">
                <?php //para imprimir las alertas
                if (isset($_GET['confirm'])) {
                    if ($_GET['confirm'] === "1") {
                        echo '<div class="alert alert-success" role="alert">
                        se ha inscrito el usario
                    </div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">
                        No se ha inscrito ningun usario
                    </div>';
                    }
                }
                ?>
                <form action="./mostrar.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" placeholder="Apellidos">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
                <?php

                if (isset($_GET['variable'])) {
                    echo "existe<br>";
                    echo $_GET['variable'];
                } else {
                    echo "No existe";
                }

                ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>