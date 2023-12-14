<?php
include "header.php";
?>

  <!-- ENCABEZADO -->
  <div class="row">
    <h1>ARCHIVO INTERMEDIO</h1>
    <form>
        <div class="grid">
          <div class="grid-x">
            <div class="medium-2 cell">
              <label>Numero de Solicitud:
                  <!-- <input class="form-control" type="text" name="numerosoli" required> -->
                  <input name="search" id="search" class="form-control" type="search" placeholder="Search" aria-label="Search">
              </label>
              
            </div>

            <div class="medium-2 cell">
              <br>
              <button type="submit" class="button ">Buscar</button>

              <label id="buscar">
                   <p id='solicitud'>Solicitud Buscada: </p>
              </label>
            </div>
          </div>
    </form>
  </div>

  <!-- FIN ENCABEZADO -->


<!-- CUERPO DE LA WEB -->
  
      <form> 
        <div class="grid-x grid-margin-x">
            <div class="medium-4 cell">
              <label for="" id='container'>
                Numero de solicitud
                <input type="text" name="numsoli" id="numsoli" value="">
              </label>
              
              <label>Nombre del usuario:
                <input type="text" name="txtnombre" id="txtnombre" value="">
              </label>
              <label for="">
                <p></p>
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


            <div class="medium-4 cell">

              <label>DNI:
                  <p id='dni'></p></p>
              </label>

              <label for="">Tipo de Escritura:
                <p id="tipEscritura"></p>
              </label>
              <label for="">Notario
                <input type="text" name="notario" id="notario" value="">
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



              <div id="micombo">
                
              </div>
            </div>

            <div class="medium-4 cell">
              <label for="">Telefono
                <p id="telefono"></p>
              </label>
                <label>Fecha de Recepcion
                  <input type="text" name="fecharecepcion" id="fecharecepcion" value="">
              </label>

              <label for="">
                <p>-</p>
              </label>
              <hr>
              
              <label>Fecha de Atencion
                  <input class="form-control" type="date" name="fechaatendida" id="fechaatendida" value="" required>
              </label>                


              
                
            </div>

          
        </div>
        </div>
      </form>

      <!-- MODIFICACIONES -->
      <h2>MODIFICACIONES</h2>

      <form action="../Controllers/formulario.controller.php" method="post">
        <div class="grid-x grid-margin-x">

          <div class="medium-4 cell">
            <button type="button" class="button" name="btnNotario" id="btnNotario">Cambio de Notario</button>
          </div>

            <div class="medium-4 cell">
                <label for="">Observacion
                  <textarea name="observacion" id="" cols="30" rows="4"></textarea>
                </label>

                <div class="medium-4 cell">
                  <button type="submit" class="button large">Guardar Información</button>
                </div>
            </div>
            <div class="medium-4 cell">
            <label>Fecha de Modificación
                  <input class="form-control" type="date" name="fechaatendida" id="fechaatendida" value="" required>
            </label>
            </div>
            <div id="micombo"></div>
        </div>

      </form>


<?php require "footer.php"; ?> 