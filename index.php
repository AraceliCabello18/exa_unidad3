<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Bono Adicional</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Bono</h1>
            <div class="card">
                <div class="card-body">
                    <form method="post" onsubmit="return calcular()" id="frmbono">
                        <h2>Datos del Empleado</h2>
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <label for="Sueldo">Sueldo</label>
                                    <input type="text" class="form-control" id="sueldo" name="sueldo"
                                        pattern="[0-9]+">
                                </div>
                                <div class="col">
                                    <label for="Edad">Edad</label>
                                    <input type="text" class="form-control" id="edad" name="edad" pattern="[0-9]+">
                                </div>
                            </div>
                        </form>
                        <div class="form-row">
                            <div class="col">
                                <label for="sexo">Sexo</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="" >Selecciona el Sexo</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="masculino">Masculino</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="nacionalidad">Nacionalidad</label>
                                <select name="nacionalidad" id="nacionalidad" class="form-control">
                                    <option value="nacional">Nacional</option>
                                    <option value="extranjero">Extenjero</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <h3>Curso</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="checkbox" name="php" id="php" value="php">
                                <label for="php">Php</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" name="java" id="java" value="java">
                                <label for="java">Java</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="checkbox" name="asp" id="asp" value="asp">
                                <label for="asp">ASP.Net</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" name="oracle" id="oracle" value="oracle">
                                <label for="oracle">Oracle</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" name="vb" id="vb" value="vb">
                                <label for="vb">VB.Net</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="checkbox" name="bd" id="bd" value="bd">
                                <label for="bd">Introduccion a BD</label>
                            </div>
                        </div>
                        <hr>
                        <h3>Antiguedad</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="radio" name="antiguedad" id="1a5" value="1a5">
                                <label for="1a5">1 a 5 Año</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" name="antiguedad" id="6a10" value="6a10">
                                <label for="6a10">6 a 10 Años</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" name="antiguedad" id="masde10" value="masde10">
                                <label for="masde10">Mas de 10</label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button class="btn btn-primary" id="btn_calcular">Calcular</button>
                                <button class="btn btn-primary" onclick="nuevo()">Nuevo Calcular</button>
                            </div>
                            <div class="col-sm-6">
                                <label for="bono">Bono:</label>
                                <div id="bono"></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="funciones.js"></script>
</body>

</html>