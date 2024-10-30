<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link rel="stylesheet" href="css/style.css">

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <style>
        .form-control{
        border: 1px solid #00000080;
        }


    </style>



    <body style="background-color: #1D9C9E;">
        


            </div>       
                <h1 class="text-center my-1 fw-normal crea">Cooperativa "SHARIF"</h1>
            </div>  
            
            <div class="my-2 text-center">
                <img src="img/logo.svg" alt="" srcset="">
            </div>




        

        
<div class="container mt-5 mb-3">
    <div class="row justify-content-center">
        <div class="col-md-4">
            
            <form method="POST" action="./pages/index.php">
                <h4 class="mb-2 text-center">Bienvenido/a</h4>
                <div class="mb-3">
                    <label for="username" class="form-label">Codigo Administrador o Empleado</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-medium"><a class="entrar" href="./pages/index.php">Acceder</a></button>

                <div class="mt-4  text-center">
                    <p>Sistema Administrador/Empleado</p>
                    <a href="loginUser.php">¿Eres Cliente?</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Contraseña incorrecta, intente de nuevo.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php include './modules/footer.php'?>



<script src="js/bootstrap.bundle.min.js"></script>








        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
