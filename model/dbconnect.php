<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$strcon = 'sqlite:locadora.sqlite';
$dbcon = new PDO($strcon);

