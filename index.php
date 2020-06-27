

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Taller 2</title>
</head>
<body class="bg-dark text-white">
    <header>
        <h1 class="text-center ">REGISTRO DE USUARIO</h1>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 ">          
                    <br>
                    <br>
                    <br>
          
                    <h1 class="text-center ">REGISTRATE EN NUESTRA WEB</h1>
                    <br>
                        <form class="" action="agregarDatos.php" method="POST">
                            <div class="form-group">
                                <label for="nombreUsuario">Nombre Usuario</label>
                                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" >
                            </div>
                            <div class="form-group">                                
                                <label for="correoUsuario">Correo Electrónico</label>                                
                                <input  type="text" class="form-control" id="correoUsuario" name="correoUsuario"  >
                            </div>
                            <div class="form-group">
                                <label for="passUsuario">Contraseña</label>
                                <input type="password" class="form-control" id="passUsuario" name="passUsuario">
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block " id="btn-Agregar" name="btn-Agregar">Agregar</button>
                        </form>
                        <br>
                        <br>
                        <form  action="buscarDatos.php" method= "POST">
                            <div class="form-group ">
                                <label for="nombreUsuario">Nombre usuario</label>
                                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-success btn-lg btn-block " id="btn-buscar" name="btn-buscar">Buscar</button>
                        </form>    
                        

                        <form  class="mt-5" action="eliminarDatos.php" method= "POST">
                        <br>
                            <div class="form-group">
                                <label for="eliminarUsuario">Eliminar Usuario</label>
                                <input type="text" class="form-control" id="eliminarUsuario" name="eliminarUsuario" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg btn-block" id="btn-eliminar" name="btn-Eliminar">Eliminar</button>
                        </form>    
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>

        </section>
    </main>
    <footer>
    
    </footer> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

