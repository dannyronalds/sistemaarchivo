<?php
require_once '../model/validacionModel.php';

$validacion = new Validacion();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $txtnumsolicitud = $_POST['txtnumsolicitud'];
    $idusuario = $_POST['idusuario'];
    $tipodoc = $_POST['tipodoc'];
    $estado = $_POST['estado'];
    $fechaatendida = $_POST['fechaatendida'];
    $changeNotario = $_POST['changeNotario'];
    $cambNot = $_POST['cbonotario'];
    //echo $cambNot;
    
    // Verificar si se seleccionó "Sí" para el cambio de notario
    $notarioCambiado = "";
    if ($changeNotario === 'Si') {
        $notarioCambiado = $_POST['notarioCambiado'];
    }
    // Insertar los datos en la tabla
    $result = $validacion->formEstadistica($txtnumsolicitud, $idusuario, $tipodoc, $estado, $fechaatendida, $changeNotario, $cambNot);
    if ($result === TRUE) {
        echo "Registro exitoso";
        // Ahora, consulta para recuperar los datos recién ingresados
        $data = $validacion->verFormEstadistica($txtnumsolicitud,$idusuario);
        if ($data > 0) {
            // Mostrar los datos recuperados
            echo "<h2>Datos Recién Guardados:</h2>";
            while ($row = $data->fetch_assoc()) {
                echo "<p>Número de Solicitud: " . $row['numero_solicitud'] . "</p>";
                echo "<p>ID de Usuario: " . $row['id_usuario'] . "</p>";
                echo "<p>Tipo de Documento: " . $row['tipo_documento'] . "</p>";
                echo "<p>Estado del Documento: " . $row['estado_documento'] . "</p>";
                echo "<p>Fecha de Atención: " . $row['fecha_atencion'] . "</p>";
                echo "<p>Cambio de Notario: " . $row['cambio_notario'] . "</p>";
                echo "<p>Notario Cambiado: " . $row['notario_cambiado'] . "</p>";
            }
        }
    } else {
        echo "Error al registrar datos: " ;
    }
}
?>
