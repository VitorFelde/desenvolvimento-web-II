<?php 

$id = 0;
if (isset($_GET["id"]))
    $id = $_GET["id"];

if (! $id) {
    echo "id inválido";
}