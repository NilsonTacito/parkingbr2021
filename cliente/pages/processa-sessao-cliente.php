<?php
session_start();
if($_SESSION['cliente_logado'] == TRUE){//verificar igualdade
    $nome_cliente = $_SESSION['cliente_nome'];
    $login_cliente = $_SESSION['cliente_email'];
    if (isset($_COOKIE["id-do-estac"])){
        $cookie_id_estac = $_COOKIE["id-do-estac"];
    }
}else {
    header('Location: /index.php');
    exit();
}
?>