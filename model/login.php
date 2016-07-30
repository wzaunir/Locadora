<?php

require_once './dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $sql = "SELECT id,nome FROM usuario where login = ? AND senha = ?";

    $login = sha1($_POST['password'].$_POST['username']);
    $prepare = $dbcon->prepare($sql);
    $prepare->execute(array($_POST['username'],$login));    
    
    $usuario = $prepare->fetch(PDO::FETCH_ASSOC);

    
    if ($usuario != false) {
        
        $time = ($_POST['remember'] == 1)? mktime() + (7 * 24 * 60 * 60) : 0;
        
        setcookie('locadora', json_encode($usuario), $time ,'/');
        header('Location: ../index.php');
    
    }else{
        echo "Usuário ou senha inválidos";
        header('Location: ../login.php');
    } 

   
}