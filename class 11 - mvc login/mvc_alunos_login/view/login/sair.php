<?php 

include_once(__DIR__ . "/../../controller/LoginController.php");
include_once(__DIR__ . "/../../include/config.php");

$loginCont = new LoginController();
$loginCont->deslogar();
header("location: login.php");