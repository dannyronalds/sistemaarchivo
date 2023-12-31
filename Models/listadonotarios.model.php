<?php
require 'Conexion.php';

$conn = new Conexion();

/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['cod_not', 'nom_not', 'pat_not', 'mat_not', 'fec_ini', 'fec_fin', 'provincia', 'obs'];

/* Nombre de la tabla */
$table = "notarios";

$id = 'cod_not';

$campo = isset($_POST['campo']) ? $_POST['campo'] : null;

/* Filtrado */
$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

/* Limit */
$limit = isset($_POST['registros']) ? $_POST['registros'] : 10;
$pagina = isset($_POST['pagina']) ? $_POST['pagina'] : 0;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $limit;
}

$sLimit = "LIMIT $inicio , $limit";

/**
 * Ordenamiento
 */
$sOrder = "";
if(isset($_POST['orderCol'])){
    $orderCol = $_POST['orderCol'];
    $orderType = isset($_POST['orderType']) ? $_POST['orderType'] : 'asc';
    
    $sOrder = "ORDER BY ". $columns[intval($orderCol)] . ' ' . $orderType;
}

/* Consulta */
$sql = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . "
FROM $table
$where
$sOrder
$sLimit";
$resultado = $conn->ConsultaCon($sql);
$num_rows = $resultado->num_rows;

/* Consulta para el total de registros filtrados */
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro = $conn->ConsultaCon($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro[0];

/* Consulta para el total de registros totales */
$sqlTotal = "SELECT count($id) FROM $table ";
$resTotal = $conn->ConsultaCon($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistros = $row_total[0];

/* Mostrando resultados */
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro;
$output['data'] = '';
$output['paginacion'] = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $output['data'] .= '<tr>';
        $output['data'] .= '<td>' . $row['cod_not'] . '</td>';
        $output['data'] .= '<td>' . $row['nom_not'] . '</td>';
        $output['data'] .= '<td>' . $row['pat_not'] . '</td>';
        $output['data'] .= '<td>' . $row['mat_not'] . '</td>';
        $output['data'] .= '<td>' . $row['fec_ini'] . '</td>';
        $output['data'] .= '<td>' . $row['fec_fin'] . '</td>';
        $output['data'] .= '<td>' . $row['provincia'] . '</td>';
        $output['data'] .= '<td>' . $row['obs'] . '</td>';
        //$output['data'] .= '<td><a class="btn btn-warning btn-sm" href="editar.php?id=' . $row['idSol'] . '">Editar</a></td>';
        //$output['data'] .= "<td><a class='btn btn-danger btn-sm' href='eliminar.php?id=" . $row['idSol'] . "'>Eliminar</a></td>";
        $output['data'] .= '</tr>';
    }
} else {
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="8">Sin resultados</td>';
    $output['data'] .= '</tr>';
}

if ($output['totalRegistros'] > 0) {
    $totalPaginas = ceil($output['totalRegistros'] / $limit);

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class="pagination">';

    $numeroInicio = 1;

    if(($pagina - 4) > 1){
        $numeroInicio = $pagina - 4;
    }

    $numeroFin = $numeroInicio + 9;

    if($numeroFin > $totalPaginas){
        $numeroFin = $totalPaginas;
    }

    for ($i = $numeroInicio; $i <= $numeroFin; $i++) {
        if ($pagina == $i) {
            $output['paginacion'] .= '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
        } else {
            $output['paginacion'] .= '<li class="page-item"><a class="page-link" href="#" onclick="nextPage(' . $i . ')">' . $i . '</a></li>';
        }
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}

// Cerrar la conexión al final del script
$conn->close();

echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>















