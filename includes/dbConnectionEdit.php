<?php
// Connection to the database
session_start();

$bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
$dbUserName = "admin";
$dbPassword = "SSs1035443768+";
$dbName = "Asesorias";

$conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

// Edit name from the database
$idNumb = strtoupper($_POST['idNumb']);
$firstName = strtoupper($_POST['firstName']);

if (!empty($idNumb)) {

    if (isset($conn)) {
        $stmt = "UPDATE Clientes SET nombre1 = '$firstName' WHERE idCliente = '$idNumb';";

        $stmtRun = mysqli_query($conn, $stmt);

            if ($stmtRun) {
                $SESSION['status'] = 'Datos editados correctamente';
                header("Location:../indexEdit.html");
            } else {
                $SESSION['status'] = 'Error al editar los datos';
                header("Location:../indexEdit.html");
            }
    }
} else {
        echo "Debes ingresar un numero de identificación correcto";
        die();
}
?>