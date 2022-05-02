<?php
    include('funciones/funciones.php');
    session_start();
    
    $xc = conectar();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' AND password = " . $password;
    //echo $sql;
    $res = mysqli_query($xc, $sql) or die('usuario o pasword incorrecto');
    $filas = mysqli_fetch_array($res);
    if (isset($filas)) {
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['password'] = $_POST['password'];
        header("Location: index.php", TRUE, 301);
        
        echo  $_SESSION['usuario' ];
            exit();
        } else {
            echo 'usuario o pasword incorrecto';
        }
?>