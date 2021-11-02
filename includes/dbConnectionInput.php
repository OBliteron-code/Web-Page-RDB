<?php
// Connection to the database
session_start();

$bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
$dbUserName = "admin";
$dbPassword = "SSs1035443768+";
$dbName = "Asesorias";

$conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

// Input into the database
$firstName = strtoupper($_POST['firstName']);
$secondName = strtoupper($_POST['secondName']);
$firstSurname = strtoupper($_POST['firstSurname']);
$secondSurname = strtoupper($_POST['secondSurname']);
$idNumb = strtoupper($_POST['idNumb']);
$idType = $_POST['idType'];
$rawdate = htmlentities($_POST['birthday']);
$birthday = date('Y-m-d', strtotime($rawdate));
$birthdayCity = strtoupper($_POST['birthdayCity']);
$birthdayCountry = strtoupper($_POST['birthdayCountry']);
$sexo = $_POST['sexo'];
$maritalStatus = $_POST['maritalStatus'];
$nationality1 = strtoupper($_POST['nationality1']);
$nationality2 = strtoupper($_POST['nationality2']);
$phone = $_POST['phone'];
$celPhone = $_POST['celPhone'];
$email = strtoupper($_POST['email']);

if (!empty($firstName) || !empty($firstSurname) || !empty($idNumb) || !empty($idType) || !empty($birthday) 
    || !empty($birthdayCity) || !empty($birthdayCountry) || !empty($sexo) || !empty($maritalStatus)
    || !empty($nationality1) || !empty($nationality2) || !empty($phone) || !empty($celPhone) || !empty($email)) {

        if (isset($conn)) {
            $stmt = "INSERT INTO Clientes(idCliente, idTipo, nombre1, nombre2, apellido1, apellido2, 
            fechaNacimiento, ciudadNacimiento, paisNacimiento, sexo, estadoCivil, nacionalidad1, nacionalidad2,
            telefono, celular, email) 
            VALUES ('$idNumb', '$idType', '$firstName', '$secondName', '$firstSurname', '$secondSurname',
            '$birthday', '$birthdayCity', '$birthdayCountry', '$sexo', '$maritalStatus', '$nationality1', '$nationality2',
            '$phone', '$celPhone', '$email');";

            $stmtRun = mysqli_query($conn, $stmt);

            if ($stmtRun) {
                $SESSION['status'] = 'Datos insertados correctamente';
                header("Location:../indexForm.html");
            } else {
                 $SESSION['status'] = 'Error al insertar los datos';
                header("Location:../indexForm.html");
            }
        }

    } else {
        echo "Debes ingresar todos lo campos solicitados.";
        die();
    }
?>