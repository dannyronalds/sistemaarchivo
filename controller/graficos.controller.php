<?php
require "../model/graficos.model.php";
class Graficos_controller
{
    private $model;
    function __construct()
    {
        $this->model = new Graficos_model();
        return $this->model;
    }
    function pie()
    {
        $data = $this->model->Pie();
        $json = json_encode($data);
        return $json;
    }
    function line()
    {

        $data = $this->model->Line();
        $json = array();
        while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
            $fecha = strtotime($row['fecha']);
            $dia = date('D',$fecha);
            $jsonFecha[] = $dia;
            $jsonTotal[] = $row['total'];
        }
        $json[] = array(
            "dias" => $jsonFecha,
            "total" => $jsonTotal,
        );
        $jsonString = json_encode($json);
        return $jsonString;
    }
    function barrasX()
    {
        $data = $this->model->BarrasX();
        $json = array();
        while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
            $jsonTipo[] = $row['tipo'];
            $jsonTotal[] = $row['total'];
        }
        $json[] = array(
            "tipo" => $jsonTipo,
            "total" => $jsonTotal,
        );
        $jsonString = json_encode($json);
        return $jsonString;
    }
    function barrasY()
    {
        $data = $this->model->BarrasY();
        $json = array();
        while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
            $jsonTipo[] = $row['tipo'];
            $jsonTotal[] = $row['total'];
        }
        $json[] = array(
            "tipo" => $jsonTipo,
            "total" => $jsonTotal,
        );
        $jsonString = json_encode($json);
        return $jsonString;
    }
}



$graficos = new Graficos_controller();
//MANEJO DE ACCIONES
//echo $_GET['action'];
if (!empty($_GET['action']) && isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "pie":
            echo $graficos->Pie();
            break;
        case "line";
            echo $graficos->line();
            break;
        case "barrasX";
            echo $graficos->barrasX();
            break;
        case "barrasY";
            echo $graficos->barrasY();
            break;
    }
}
