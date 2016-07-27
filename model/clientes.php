<?php

require_once './dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {



    $data = explode('/', $_POST['data-nascimento']);
    $form_data = $data[2] . '-' . $data[1] . '-' . $data[0];

    if (isset($_POST['id']) && $_POST['id'] > 0) {

        $sql = "UPDATE cliente set nome='".$_POST['nome']."',email='".$_POST['email']."',telefone='".$_POST['telefone']."',data_nascimento='".$form_data."'";
    } else {

        $sql = "INSERT INTO cliente (nome,email,telefone,data_nascimento) 
            VALUES (
            '" . $_POST['nome'] . "',"
                . "'" . $_POST['email'] . "',"
                . "'" . $_POST['telefone'] . "',"
                . "'" . $form_data . "')";
    }

    /*if ($dbcon->exec($sql) === false) {

        echo '{"status":"erro"}';
    } else {*/

        echo '{"status":"ok"}';
   // }
} elseif ($_SERVER["REQUEST_METHOD"] == 'GET') {

    $sql = "SELECT * FROM catalogo where id = '" . $_GET['id'] . "'";

    $resultado = $dbcon->query($sql);

    echo json_encode($resultado->fetch(PDO::FETCH_ASSOC));
}