<?php 
require "../Models/controlTipo.model.php";

$numsolicitud = $_POST['numerosol'];
//$numsolicitud = 19;

# array
# 1 buscar en BD el tipo de documento
# 
# Consulta SQL para seleccionar registros donde codSol = 2
$control = new ControlTipo();
$datasct = $control->ConsultaTipo($numsolicitud);

/*
$datasct['codSol'];
$datasct['codUsu'];
$datasct['codTipSol'];
$datasct['idSol'];
*/

$data = $control->VerUsuario($datasct['codUsu']);
/*
$data['codUsu'];
$data['usuario'];
$data['numDoc'];
$data['codDis'];
$data['telefono'];
*/

switch ($datasct['codTipSol']) {
    case 1:
        // Consulta SQL para obtener solicitudes con código de tipo 1


        $escritura = $control->VerDatosEscritura($datasct['codSol']);
        $notario = $control->VerNotario($datasct['codSol']);
        //var_dump($partida);

		$escriForma = "
        <div class='row small-up-2 medium-up-3 large-up-4'>
        <h3>Dato de la solicitud</h3>
        <input type='text' name='txtnumsolicitud' id='codSol' value='".$datasct['codSol']."'>
        <input type='text' name='codusuario' id='codUsu' value='".$data['codUsu']."'>
        <div class='column'>    
            <label>
                Nombre:  ".$data['usuario']."
            </label>
            <label>
                dni: ".$data['numDoc']."
            </label>
            <label>
                Telefono: ".$data['telefono']."
            </label>
        </div>
        <div class='column'>
            <label>
            Escritura: ".$escritura['tipEsc']."
            </label>
            <label>
                Notario: ".$notario['nomNot']."
            </label>
        </div>
        <div class='column'>
            <label>
                otorgante: ".$escritura['otorgante']."
            </label>
            <label>
                Favorecido: ".$escritura['favorecido']."
            </label>
        </div>
        <div class='column'>
            <label>
                Fecha de solicitud:  15/08/2023
            </label>
        </div>
        <div class='column'>
        <label>
            Fecha: ".$escritura['fecha']."
            </label>     
        </div>
        <div class='column'>
            <label>
                Mas datos: ".$escritura['obs']."
            </label>
        </div>
        <div class='column'>
            <label>
                <h4>TIPO: ESCRITURA </h4>
            </label>
        </div>
        
      </div>
        ";

        echo $escriForma;

        break;

    case 2:
        // Consulta SQL para obtener solicitudes con código de tipo 2
        $partida = $control->VerDatosPartida($datasct['codSol']);
        //var_dump($partida);


        $partiForma = "
        <div class='row small-up-2 medium-up-3 large-up-4'>
        <h3>Dato de la solicitud</h3>
        <input type='text' name='txtnumsolicitud' id='codSol' value='".$datasct['codSol']."'>
        <input type='text' name='codusuario' id='codUsu' value='".$data['codUsu']."'>
        <div class='column'>    
            <label>
                Nombre:  ".$data['usuario']."
            </label>
            <label>
                dni: ".$data['numDoc']."
            </label>
            <label>
                Telefono: ".$data['telefono']."
            </label>
        </div>
        <div class='column'>
            <label>
            Partida: ".$partida['tipPar']."
            </label>
            <label>
                Municipalidad: ".$partida['muni']."
            </label>
        </div>
        <div class='column'>
            <label>
                Nombre 1: ".$partida['nombre1']."
            </label>
            <label>
                Nombre 2: ".$partida['nombre2']."
            </label>
        </div>
        <div class='column'>
            <label>
                Fecha de solicitud:  15/08/2023
            </label>
        </div>
        <div class='column'>
            <label>
            Fecha: ".$partida['fecha']."
            </label>     
        </div>
        <div class='column'>
            <label>
                Mas datos: ".$partida['obs']."
            </label>
        </div>
        <div class='column'>
            <label>
                <h4>TIPO: PARTIDA </h4>
            </label>
        </div>
        
      </div>
        ";

        echo $partiForma;

        break;

    case 3:
        // Consulta SQL para obtener solicitudes con código de tipo 3
        
        $expediente = $control->VerDatosExpediente($datasct['codSol']);
        //var_dump($expediente);
        

        $expeForma = "
        <div class='row small-up-2 medium-up-3 large-up-4'>
        <h3>Dato de la solicitud</h3>
        <input type='text' name='txtnumsolicitud' id='codSol' value='".$datasct['codSol']."'>
        <input type='text' name='codusuario' id='codUsu' value='".$data['codUsu']."'>
        <div class='column'>    
            <label>
                Nombre:  ".$data['usuario']."
            </label>
            <label>
                dni: ".$data['numDoc']."
            </label>
            <label>
                Telefono: ".$data['telefono']."
            </label>
        </div>
        <div class='column'>
            <label>
                Expediente: ".$expediente['tipExpJud']."
            </label>
            <label>
                Materia: ".$expediente['materia']."
            </label>
        </div>
        <div class='column'>
            <label>
                Demandante: ".$expediente['demandante']."
            </label>
            <label>
                Demandado: ".$expediente['demandado']."
            </label>
            <label>
                Causante: ".$expediente['causante']."
            </label>
             
        </div>
        <div class='column'>
            <label>
                Juzgado: ".$expediente['juzgado']."
            </label>
            <label>
                Nombre Sec.: ".$expediente['nomSec']."
            </label>    
            <label>
                Lugar: ".$expediente['Lugar']."
            </label>  
        </div>
        <div class='column'>
            <label>
            Fecha: ".$expediente['fecha']."
            </label>     
        </div>
        <div class='column'>
            <label>
                Mas datos: ".$expediente['obs']."
            </label>
            
        </div>
        <div class='column'>
            <label>
                <h4>TIPO: EXPEDIENTE </h4>
            </label>
        </div>
        
      </div>
        ";

        echo $expeForma;

        break;
}

