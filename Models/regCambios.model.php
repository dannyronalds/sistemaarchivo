<?php

require_once "Conexion.php";

if (isset($_POST["btnGuardar"])) {
    if (strlen($_POST['txtnumsolicitud']) >= 1 && strlen($_POST['idusuario']) >= 1 && strlen($_POST['tipodoc']) >= 1 ) {
        $txtnumsolicitud = $_POST['txtnumsolicitud'];
        $idusuario = trim($_POST['idusuario']);
        $tipodoc = trim($_POST['tipodoc']);
        $consulta = "INSERT INTO recepcion.estadisticas
        (idesta,
        numsolicitud,
        idusuario,
        estado,
        notario,
        documento,
        anio,
        fecAtencion,
        fecCreate,
        idpersonal)
        VALUES
        (<{idesta: }>,
        <{'$txtnumsolicitud'}>,
        <{'$idusuario' }>,
        <{estado: }>,
        <{notario: }>,
        <{'$tipodoc' }>,
        <{anio: }>,
        <{fecAtencion: }>,
        <{fecCreate: }>,
        <{idpersonal: }>)";
        
        $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Se ha guardado los cambios correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}  
?>