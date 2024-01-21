<?php

require "model/Peliculas.php";

$peliculas = new Peliculas();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cinemax</title>
        <link rel="stylesheet" href="css/gestor.css">

        <!--DataTables-->
        <script type="text/javascript" src="assets/libs/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/plugins/DataTables-1.12.1/css/dataTables.bootstrap5.css"/>
        <script type="text/javascript" src="assets/plugins/datatables.min.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script type="text/javascript" src="gestor.js"></script>
        <meta name="viewport" content="width=device-width,
        user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
        minimum-scale=1.0">
    </head>

    <body>
        <?php include 'eliminar.php';
         include 'agregar.php';
         include 'editar.php'; ?>
        <div>
            <button onclick="window.location.href = 'index.php'" class='salir' style="width:auto;">SALIR</button>
            <button onclick="window.location.href = 'signup.php'" class='salir' style="width: auto;float: right;">REGISTRAR</button>
        </div>

        <div class="container-all">
        
        <h1>Gestión de funciones</h1>
        <div class="container">
            <table id="lista_peliculas" class="table table-hover table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Horarios</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
            </table>
            <button type="button" data-toggle="modal" data-target="#modal_agregarPelicula" class="btn btn-secondary">Añadir</button>
        </div>
        <script> init(); </script>
    </body>
</html>