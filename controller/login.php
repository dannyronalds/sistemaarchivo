<?php 
require "../model/validacionModel.php";
$validacion = new Validacion();

$user = $_POST['usuario'];
$password = $_POST['password'];
if(!empty($user) && !empty($password)){
    $data = $validacion->Login($user,$password);
    if($user == $data['username']&&$password==$data['passwd']){
        session_start();
        $_SESSION['usuario']=$user;
        header("location: ../view/main.php");
    }else{
        header("location: ../view/login.php");
    }    
}else{
    header("location: ../view/login.php");
}






?>