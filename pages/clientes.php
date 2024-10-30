<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooperativa SHARIF</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

<div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="header mt-3">
                    Cooperativa "SHARIF"
                </div>
            
            </div>
            <div class="col mt-3">
                <img src="/img/logo.svg" alt="" srcset="" width="30%">
            </div>
            <div class="col mt-3">
                <div class="col">
                <p class="fs-1 fw-medium " style="font-size: 38px ; font-weight: 600;">Clientes</p>
            </div>
            </div>
            <div class="col mt-3">
                <img src="/img/Vector.svg" alt="" width="30%">
            </div>
        </div>
    </div>

    <a href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-90deg-left m-2 mb-4"  viewBox="0 0 16 16" style="position: relative; display:flex; left:1rem; color:white;">
            <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
        </svg>
    </a>

    <div class="container mb-5 ">
        <input type="text" id="disabledTextInput" class="form-control" placeholder="Buscar Clientes" width="100%">
    </div>
    

    

    <div class=" container empleado w-100 ">
        <div class="row">
            <div class="col py-4">
                <img src="../img/Vector.svg" alt="" srcset="">
            </div>
            <div class="col-6  py-4">
                <p>Lorem, ipsum dolor.</p>
                <p>Lorem, ipsum.</p>
            </div>
            <div class="col py-4">
                <button type="button" class="btn btn-info w-100">Actualizar</button>
                <br>
                <button type="button" class="btn btn-danger w-100 mt-2">Eliminar</button>
            </div>
        </div>
    </div>

    <div class=" container empleado w-100 mt-4">
        <div class="row">
            <div class="col py-4">
                <img src="../img/Vector.svg" alt="" srcset="">
            </div>
            <div class="col-6  py-4">
                <p>Lorem, ipsum dolor.</p>
                <p>Lorem, ipsum.</p>
            </div>
            <div class="col py-4">
                <button type="button" class="btn btn-info w-100">Actualizar</button>
                <br>
                <button type="button" class="btn btn-danger w-100 mt-2">Eliminar</button>
            </div>
        </div>
    </div>


    <div class="container text-center w-100 mt-5">
        <a href="nuevoCliente.php" type="button" class="btn btn-success p-3 w-25 ">Nuevo Registro</a>
    </div>


    <?php include '../modules/footer.php'?>

    <!-- Font Awesome and Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>