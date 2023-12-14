<?php include "header.php";

@$numsolicitud = $_GET['numeroSolicitud'];
# enviar a una clase en PHP 
?>
<div class="row">
    <h1>REGISTRO DE SOLICITUDES ATENDIDAS</h1>
    <form>
        <div class="grid">
          <div class="grid-x">
            <div class="medium-2 cell">
              <label>Numero de Solicitud:
                  <input class="form-control" type="text" name="numeroSolicitud" required>
              </label>
              
            </div>

            <div class="medium-2 cell">
              <br>
              <button type="submit" class="button ">Buscar</button>
              <label>
                <p>Solicitud Buscada: <?php echo $numsolicitud;?></p>
              </label>
            </div>
          </div>
    </form>
  </div>


	<head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Tres Columnas</title>
  	<style>
    	body {
      	font-family: Arial, sans-serif;
    	}
    		.container {
      	display: flex;
      font: 	 sans-serif;lex-direction: row;
    	}
    	.column {
      	flex: 1;
      	padding: 20px;
      	border: 1px solid #ccc;
      	margin: 10px;
      	background-color: #f9f9f9;
    	}
  	</style>
	</head>


	<body>
  	<div class="container">
    	<div class="column">
      	<h3>Información del</h3>
      	<h2>Documento</h2>

      	<p>
      		<div>
              <label for="">
                Numero de solicitud
                <input type="text" name="numsoli" id="numsoli" value="<?php echo $numsolicitud; ?>">
              </label>
              
              <label>Nombre del usuario:
                <input type="text" name="txtnombre" id="txtnombre" value="<?php echo $datosUsuario['persona'];?>">
              </label>
              <label for="">
                <p>-</p>
              </label>

              <hr>
                
                <label>Que documento se ha otorgado?
                  <select name="tipodoc" id="tipodoc" class="form-control" required>
                        <option value="Testimonio">Testimonio </option>
                        <option value="Copia Certificada"> Copia Certificada </option>
                        <option value="Copia Certificada por Expediente civil"> Copia Certificada por Expediente civl </option>
                        <option value="Constancia por Escritura"> Constancia por Escritura</option>
                        <option value="Constancia por Expediente civil"> Constancia por Expediente civil</option>
                        <option value="Constancia por Partida">Constancia por Partida</option>
                        <option value="C.C. Nacimiento"> C.C. Nacimiento</option>
                        <option value="C.C. Matrimonio"> C.C. Matrimonio</option>
                        <option value="C.C. Defuncion"> C.C. Defuncion</option>
                        <option value="Copia Simple"> Copia Simple</option>
                        <option value="N.A."> N.A. </option>
                        <option value="Exhibicion"> Exhibicion </option>
                        <option value="Devuelto"> Devuelto </option>
                  </select>
                </label>
      		</div>
      	</p>
    	</div>




    	<div class="column">
      	<h2>Escritura</h2>
      	<p>
      		  <label>DNI:
                <input type="text" name="" value="" placeholder="">
              </label>
              <label for="">Tipo de Escritura:
                <p><?php echo $tipoEscritura['tipEsc'];?></p>
              </label>
              <label for="">Notario
                <input type="text" name="notario" id="notario" value="<?php echo $datosNotario['notario'] . " - (".$datosNotario['provincia'].")";?>">
                <p></p>
              </label>

              <hr>

              <label>Estado
                <select name="estado" id="estado" class="form-control">
                  <option value="Atendido">Atendido</option>
                  <option value="No Atendido">No Atendido</option>
                  <option value="Pendiente">Devuelto</option>
                </select>
              </label>



              <div id="micombo"></div>
            </div>

      	</p>
    	</div>









    	<div class="column">
      	<h2>Datos Atención</h2>
      	<p>
      		<label for="">Telefono
                <p><?php echo $datosUsuario['telefono']; ?></p>
              </label>
                <label>Fecha de Recepcion
                  <input type="text" name="fecharecepcion" id="fecharecepcion" value="<?php echo $fecCreacion;?>">
              </label>

              <label for="">
                <p>-</p>
              </label>
              <hr>
              
              <label>Fecha de Atencion
                  <input class="form-control" type="date" name="fechaatendida" id="fechaatendida" value="<?php echo $fecha; ?>" required>
              </label> 
      	</p>
   	 </div>
  	</div>
	</body>






	









<?php include "footer.php" ?>