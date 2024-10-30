<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cooperativa SHARIF</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="header mb-5">
        Cooperativa "SHARIF"
    </div>

    <a href="gestion-empleado.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-90deg-left m-2 mb-4"  viewBox="0 0 16 16" style="position: relative; display:flex; left:1rem; color:white;">
            <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z"/>
        </svg>
    </a>

    <div class="container form-empleado">
        <div class="container d-flex justify-content-center">
            <div class="container-form col-md-8">
                <div class="back-icon">
                    <i class="bi bi-arrow-left"></i> <!-- Icono de regreso -->
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="codigo" class="form-label">Código:</label>
                        <input type="text" class="form-control" id="codigo">
                    </div>
                    <div class="col-md-6">
                        <label for="nombreCompleto" class="form-label">Nombre Completo:</label>
                        <input type="text" class="form-control" id="nombreCompleto">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="documentoIdentidad" class="form-label">Documento Identidad:</label>
                        <input type="text" class="form-control" id="documentoIdentidad">
                    </div>
                    <div class="col-md-3">
                        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fechaNacimiento">
                    </div>
                    <div class="col-md-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="number" class="form-control" id="edad">
                    </div>
                </div>
                <h5>Dirección Completa:</h5>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="calle" class="form-label">Calle:</label>
                        <input type="text" class="form-control" id="calle">
                    </div>
                    <div class="col-md-3">
                        <label for="casa" class="form-label">Casa:</label>
                        <input type="text" class="form-control" id="casa">
                    </div>
                    <div class="col-md-3">
                        <label for="ciudad" class="form-label">Ciudad:</label>
                        <input type="text" class="form-control" id="ciudad">
                    </div>
                    <div class="col-md-3">
                        <label for="departamento" class="form-label">Departamento:</label>
                        <input type="text" class="form-control" id="departamento">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="puesto" class="form-label">Puesto:</label>
                        <input type="text" class="form-control" id="puesto">
                    </div>
                    <div class="col-md-4">
                        <label for="sueldo" class="form-label">Sueldo:</label>
                        <input type="number" class="form-control" id="sueldo" step="0.01">
                    </div>
                    <div class="col-md-4">
                        <label for="codigoJefe" class="form-label">Código Jefe Inmediato:</label>
                        <input type="text" class="form-control" id="codigoJefe">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center w-100 mt-5">
        <a href="gestion-empleado.php" type="button" class="btn btn-success p-3 w-25 ">Finalizar Registro</a>
    </div>






    <?php include '../modules/footer.php'?>

    <!-- Font Awesome and Bootstrap JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>