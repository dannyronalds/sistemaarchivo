<?php

require "../Models/searchUser.model.php";

$search = new Search();

$fecha = date('Y-m-d');
$numsolicitud = $_POST['numsolicitud'];

if(isset($numsolicitud)){
    $dataEscritura = $search->DatosEscritura($numsolicitud);

    $codusuario  = $dataEscritura['codUsu'];
    $codTipoSol  = $dataEscritura['codTipSol'];
    $idSol       = $dataEscritura['idSol'];
    $fecCreacion = $dataEscritura['fecCreacion'];

    $datosUsuario = $search->DatosUsuario($codusuario);
    $tipoEscritura = $search->DatosTipoEscritura($idSol);
    $codNotario = $tipoEscritura['codNot'];
    $datosNotario = $search->DatosNotario($codNotario);    

    $notario = $datosNotario['notario'] . " - (".$datosNotario['provincia'].")";

    $jsonArray[] = array(

        'id'=>$idSol,
        'codusuario'=> $codusuario,
        'codTipSol'=>$codTipoSol,
        'fecCreacion'=>$fecCreacion,
        'usuario'=> $datosUsuario['persona'],
        'dni'=> $datosUsuario['numDoc'],
        'tipoEscritura'=> $tipoEscritura['tipEsc'],
        'notario'=> $notario,
        'telefono'=> $datosUsuario['telefono'],
        'fecha'=> $fecha,

    );

    // while($row = mysqli_fetch_array($dataEscritura)){
    //     $jsonArray[] = array(
    //         'id'=>$row['idSol'],
    //         'codusuario'=>$row['codUsu'],
    //         'codTipSol'=>$row['idSol'],
    //         'fecCreacion'=>$row['fecCreacion']

    //     );
    // }

    $jsonstring = json_encode($jsonArray[0]);
    echo $jsonstring;

    #dataEscritura 
    

}

