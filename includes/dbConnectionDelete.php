<?php
// Connection to the database
session_start();

$bdServerName = "aws-asesorias.ccnxgydplcw6.us-east-2.rds.amazonaws.com";
$dbUserName = "admin";
$dbPassword = "SSs1035443768+";
$dbName = "Asesorias";

$conn = mysqli_connect($bdServerName, $dbUserName, $dbPassword, $dbName);

// Input into the database
$searchDelete = strtoupper($_POST['searchDelete']);

if (!empty($searchDelete)) {

    if (isset($conn)) {
        $stmt = "DELETE FROM Clientes WHERE (idCliente = '$searchDelete');";

        $stmtRun = mysqli_query($conn, $stmt);

            if ($stmtRun) {
                $SESSION['status'] = 'Datos eliminados correctamente';
                header("Location:../indexSearch.php");
            } else {
                 $SESSION['status'] = 'Error al eliminar los datos';
                header("Location:../indexSearch.php");
            }
    }

} else {
        echo "Debes ingresar un numero de identificación correcto";
        die();
    }
?>