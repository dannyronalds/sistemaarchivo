<?php require 'header.php'; ?>
    
<div class='row small-up-2 medium-up-3 large-up-4'>
        <h3>Dato de la solicitud</h3>
        <input type='text' name='txtnumsolicitud' value='".$datasct['codSol']."'>
        <input type='text' name='codusuario' value='".$data['codUsu']."'>
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
                Id solicitud: ".$expediente['idSol']."
            </label>
            <label>
                Tipo Expediente Judicial: ".$expediente['tipExpJud']."
            </label>
        </div>

        <div class='column'>
            <label>
                Materia: ".$expediente['materia']."
            </label>
            <label>
                Demandante: ".$expediente['demandante']."
            </label>
            <label>
                Demandado: ".$expediente['demandado']."
            </label>
        </div>
        <div class='column'>
        <label>
            Causante: ".$expediente['causante']."
            </label>     
        </div>
        <div class='column'>
        <label>
            Juzgado: ".$expediente['juzgado']."
            </label>     
        </div>
        <div class='column'>
        <label>
            Nombre secretario: ".$expediente['nomSec']."
            </label>     
        </div>
        <div class='column'>
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
        
      </div>