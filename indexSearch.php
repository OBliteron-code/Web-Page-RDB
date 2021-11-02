<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images\search.svg">
    <title>Busqueda</title>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="images\index_icon.svg" width="30" height="30" class="d-inline-block align-text-top"
                    alt="airplane">
                Visas y Tramites
                Internacionales
            </a>
            <div class="navbar-nav">
                <form class="">
                    <a class="btn btn-outline-secondary buttons" href="indexForm.html">Ingresar Datos</a>
                    <a class="btn btn-outline-secondary buttons" href="indexSearch.php">Buscar Registro</a>
                    <a class="btn btn-outline-secondary buttons" href="indexEdit.html">Editar Registro</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Search Button -->
    <form action="" class="needs-validation" novalidate>
        <div class="searchID input-group flex-nowrap">
            <span class="input-group-text" id="idSearch"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control" id="idSearch" name="idSearch" placeholder="Numero de Documento"
                aria-describedby="idSearch buttonidSearch" style="text-transform:uppercase" required>
            <button class="btn btn-outline-primary" type="submit" id="buttonidSearch">Buscar</button>
        </div>
        <div class="invalid-feedback">
            Por favor ingrese un numero de documento valido.
        </div>
    </form>
    <!-- Table -->
    <table class="table table-hover table-bordered table-responsive">
        <thead>
            <tr>
                <th class="text-center" scope="col">Primer Nombre</th>
                <th class="text-center" scope="col">Segundo Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Connection to the database
            session_start();

            $bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
            $dbUserName = "admin";
            $dbPassword = "SSs1035443768+";
            $dbName = "Asesorias";

            $conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

            // Get info from the database
            $stmt = "SELECT * FROM Clientes;";
            $result = $conn -> query($stmt);

            if ($result -> num_rows > 0) {
                while ($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row['nombre1']."</td><td>".$row['nombre2']."</td></tr>";
                }
            } else {
                echo "0 resultados";
            }
            $conn -> close();
            ?>
            <tr>
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Primer Apellido</th>
                            <th class="text-center" scope="col">Segundo Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Connection to the database
                        $bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
                        $dbUserName = "admin";
                        $dbPassword = "SSs1035443768+";
                        $dbName = "Asesorias";

                        $conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

                        // Get info from the database
                        $stmt = "SELECT * FROM Clientes;";
                        $result = $conn -> query($stmt);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo "<tr><td>".$row['apellido1']."</td><td>".$row['apellido2']."</td></tr>";
                            }
                        } else {
                            echo "0 resultados";
                        }
                        $conn -> close();
                        ?>
                    </tbody>
                </table>
            </tr>
            <tr>
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Numero de Documento</th>
                            <th class="text-center" scope="col">Tipo de Documento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Connection to the database
                        $bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
                        $dbUserName = "admin";
                        $dbPassword = "SSs1035443768+";
                        $dbName = "Asesorias";

                        $conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

                        // Get info from the database
                        $stmt = "SELECT * FROM Clientes;";
                        $result = $conn -> query($stmt);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo "<tr><td>".$row['idCliente']."</td><td>".$row['idTipo']."</td></tr>";
                            }
                        } else {
                            echo "0 resultados";
                        }
                        $conn -> close();
                        ?>
                    </tbody>
                </table>
            </tr>
            <tr>
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Fecha de Nacimiento</th>
                            <th class="text-center" scope="col">Ciudad de Nacimiento</th>
                            <th class="text-center" scope="col">País de Nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Connection to the database
                        $bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
                        $dbUserName = "admin";
                        $dbPassword = "SSs1035443768+";
                        $dbName = "Asesorias";

                        $conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

                        // Get info from the database
                        $stmt = "SELECT * FROM Clientes;";
                        $result = $conn -> query($stmt);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo "<tr><td>".$row['fechaNacimiento']."</td><td>".$row['ciudadNacimiento']."</td><td>".
                                $row['paisNacimiento']."</td></tr>";
                            }
                        } else {
                            echo "0 resultados";
                        }
                        $conn -> close();
                        ?>
                    </tbody>
                </table>
            </tr>
            <tr>
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Genero</th>
                            <th class="text-center" scope="col">Estado Civil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Connection to the database
                        $bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
                        $dbUserName = "admin";
                        $dbPassword = "SSs1035443768+";
                        $dbName = "Asesorias";

                        $conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

                        // Get info from the database
                        $stmt = "SELECT * FROM Clientes;";
                        $result = $conn -> query($stmt);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo "<tr><td>".$row['sexo']."</td><td>".$row['estadoCivil']."</td></tr>";
                            }
                        } else {
                            echo "0 resultados";
                        }
                        $conn -> close();
                        ?>
                    </tbody>
                </table>
            </tr>
            <tr>
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Primera Nacionalidad</th>
                            <th class="text-center" scope="col">Segunda Nacionalidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Connection to the database
                        $bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
                        $dbUserName = "admin";
                        $dbPassword = "SSs1035443768+";
                        $dbName = "Asesorias";

                        $conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

                        // Get info from the database
                        $stmt = "SELECT * FROM Clientes;";
                        $result = $conn -> query($stmt);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo "<tr><td>".$row['nacionalidad1']."</td><td>".$row['nacionalidad2']."</td></tr>";
                            }
                        } else {
                            echo "0 resultados";
                        }
                        $conn -> close();
                        ?>
                    </tbody>
                </table>
            </tr>
            <tr>
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Numero de Telefono Fijo</th>
                            <th class="text-center" scope="col">Numero de Telefono Celular</th>
                            <th class="text-center" scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Connection to the database
                        $bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
                        $dbUserName = "admin";
                        $dbPassword = "SSs1035443768+";
                        $dbName = "Asesorias";

                        $conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

                        // Get info from the database
                        $stmt = "SELECT * FROM Clientes;";
                        $result = $conn -> query($stmt);

                        if ($result -> num_rows > 0) {
                            while ($row = $result -> fetch_assoc()) {
                                echo "<tr><td>".$row['telefono']."</td><td>".$row['celular']."</td><td>".
                                $row['email']."</td></tr>";
                            }
                        } else {
                            echo "0 resultados";
                        }
                        $conn -> close();
                        ?>
                    </tbody>
                </table>
            </tr>
        </tbody>
    </table>
    <!-- Delete Button -->
    <form action="includes\dbConnectionDelete.php" method="POST" class="needs-validation" novalidate>
        <div class="searchID input-group flex-nowrap">
            <span class="input-group-text" id="idSearch"><i class="bi bi-trash"></i></span>
            <input type="text" class="form-control" id="searchDelete" name="searchDelete"
                placeholder="Numero de Documento" aria-describedby="idSearch buttonidDelete"
                style="text-transform:uppercase" required>
            <button class="btn btn-outline-danger" type="submit" id="buttonidDelete">Eliminar Registro</button>
        </div>
        <div class="invalid-feedback">
            Por favor ingrese un numero de documento valido.
        </div>
    </form>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Validation -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>