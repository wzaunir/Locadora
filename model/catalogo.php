
<?php

require_once './dbconnect.php';
if (isset($_GET['filtro'])) {
    if ($_GET['filtro'] == 'disponiveis') {
        $sql = "SELECT * FROM catalogo "
                . "WHERE disponivel > 0";
    } elseif ($_GET['filtro'] == 'catalogos') {
        $sql = "SELECT * FROM catalogo "
                . "WHERE tipo = 'catalogo'";
    } elseif ($_GET['filtro'] == 'lancamentos') {
        $sql = "SELECT * FROM catalogo "
                . "WHERE tipo = 'lancamento'";
    } else {
        $sql = "SELECT * FROM catalogo WHERE 1=1 ";
    }
} else {
    $sql = "SELECT * FROM catalogo WHERE 1=1 ";
}

if (isset($_GET['categoria'])) {

    $sql .= "AND categoria like '%" . $_GET['categoria'] . "%'";
}
if (isset($_GET['busca']) && $_GET['busca'] > '') {

    $sql .= "AND nome like '" . $_GET['busca'] . "%'";
}


$retorno = $dbcon->query($sql);
$listaFilmes = $retorno->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($listaFilmes);
