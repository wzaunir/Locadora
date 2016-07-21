<?php
$filme["nome"] = "Star Wars IV";
$filme["categoria"] = "Ficção";
$filme["sinopse"] = "Altas aventuras no espaço";
$filme["ano"] = "1978";
$filme["tipo"] = 'catalogo';
$filme["midia"] = 'DVD';
$filme["disponivel"] = 3;

$listaFilmes[] = $filme;

$filme["nome"] = "Cleopatra";
$filme["categoria"] = "História";
$filme["sinopse"] = "História da rainha do Egito";
$filme["ano"] = "1965";
$filme["tipo"] = 'catalogo';
$filme["midia"] = 'DVD';
$filme["disponivel"] = 2;

$listaFilmes[] = $filme;

$filme["nome"] = "Os 8 odiados";
$filme["categoria"] = "Faroeste";
$filme["sinopse"] = "O oitavo filme de Quentin Tarantino";
$filme["ano"] = "2016";
$filme["tipo"] = 'lancamento';
$filme["midia"] = 'DVD';
$filme["disponivel"] = 3;

$listaFilmes[] = $filme;

$filme["nome"] = "Era do Gelo 9";
$filme["categoria"] = "Infantil";
$filme["sinopse"] = "As Aventuras dos animais pré historicos";
$filme["ano"] = "2016";
$filme["tipo"] = 'lancamento';
$filme["midia"] = 'DVD';
$filme["disponivel"] = 3;

$listaFilmes[] = $filme;


echo json_encode($listaFilmes);