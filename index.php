<?php
#OBTENGO MI URL-> delivery
$url = $_SERVER['REQUEST_URI'];
echo $url;

// Verifica si la URL solicitada existe en las rutas definidas
if($url != '/archivo/'){
    echo 'no entra';
    header('Location: /archivo/view/error.php', true, 302);
    exit;
}else{
    echo 'entra';
    header('location: /archivo/view/login.php');
    exit;
}

?>